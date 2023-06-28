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
}
