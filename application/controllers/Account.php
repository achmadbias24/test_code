<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Account_Model');
    }
    function index()
    {
        if ($this->session->userdata('role') == 'admin') {
            $data['title'] = 'Akun';
            $data['account'] = $this->Account_Model->GetUser();
            admin('akun', $data);
        } else {
            redirect('welcome');
        }
    }
    function lihat()
    {
        if ($this->session->userdata('role') == 'admin') {
            $data['title'] = 'Lihat-Akun';
            $data['account'] = $this->Account_Model->SpesificUser($this->uri->segment(3));
            admin('lihat', $data);
        } else {
            redirect('welcome');
        }
    }
    function edit()
    {
        if ($this->session->userdata('role') == 'admin') {
            $data['title'] = 'Edit-Akun';
            $data['account'] = $this->Account_Model->SpesificUser($this->uri->segment(3));
            admin('edit', $data);
        } else {
            redirect('welcome');
        }
    }
    function editUser()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $name = $this->input->post('name');
        $role = $this->input->post('role');
        $this->Account_Model->UpdateUser($username, $password, $name, $role);
        redirect('account');
    }
    function hapus()
    {
        $this->Account_Model->DeleteUser($this->uri->segment(3));
        redirect('account');
    }
    function add()
    {
        $data['title'] = 'Tambah Account';
        admin('create_user', $data);
    }
    function adduser()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $name = $this->input->post('name');
        $role = $this->input->post('role');
        $this->Account_Model->adduser($username, $password, $name, $role);
        redirect('account');
    }
}
