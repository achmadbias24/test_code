<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Post_Model');
    }
    function index()
    {
        if ($this->session->userdata('role') == 'admin') {
            $data['title'] = 'Post';
            $data['post'] = $this->Post_Model->getPost();
            admin('post', $data);
        } else if ($this->session->userdata('role') == 'author') {
            $data['title'] = 'Post';
            $data['post'] = $this->Post_Model->getPost();
            author('post', $data);
        } else {
            redirect('welcome');
        }
    }
    function addpost()
    {
        if ($this->session->userdata('role') == 'admin') {
            $data['title'] = 'Tambah Post';
            admin('addpost', $data);
        } else if ($this->session->userdata('role') == 'author') {
            $data['title'] = 'Tambah Post';
            author('addpost', $data);
        } else {
            redirect('welcome');
        }
    }
    function add()
    {
        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $this->Post_Model->add($title, $content);
        redirect('post');
    }
    function edit()
    {
        if ($this->session->userdata('role') == 'admin') {
            $data['title'] = 'Lihat-post';
            $data['post'] = $this->Post_Model->SpesificPost($this->uri->segment(3));
            admin('editpost', $data);
        } elseif ($this->session->userdata('role') == 'author') {
            $data['title'] = 'Lihat-post';
            $data['post'] = $this->Post_Model->SpesificPost($this->uri->segment(3));
            author('editpost', $data);
        } else {
            redirect('welcome');
        }
    }
    function update()
    {
        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $id = $this->input->post('id');
        $this->Post_Model->update($title, $content, $id);
        redirect('post');
    }
    function lihat()
    {
        if ($this->session->userdata('role') == 'admin') {
            $data['title'] = 'Lihat-post';
            $data['post'] = $this->Post_Model->SpesificPost($this->uri->segment(3));
            admin('lihatpost', $data);
        } elseif ($this->session->userdata('role') == 'author') {
            $data['title'] = 'Lihat-post';
            $data['post'] = $this->Post_Model->SpesificPost($this->uri->segment(3));
            author('lihatpost', $data);
        } else {
            redirect('welcome');
        }
    }
    function hapus()
    {
        $this->Post_Model->delete($this->uri->segment(3));
        redirect('post');
    }
}
