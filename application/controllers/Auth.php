<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_Model');
    }
    public function login()
    {
        $username = $this->input->post('username');
        $pass = $this->input->post('password');
        $cek_data = $this->Auth_Model->GetUser($username);

        if (!empty($cek_data)) {
            if ($cek_data[0]['password'] == $pass) {
                $sessionUser = array(
                    'nama' => $cek_data[0]['name'],
                    'role' => $cek_data[0]['role'],
                    'username' => $cek_data[0]['username']
                );
                $this->session->set_userdata($sessionUser);

                //cek role
                if ($cek_data[0]['role'] == 'admin') {
                    // role admin
                    redirect('account');
                } else {
                    //role author
                    redirect('post');
                }
            } else {
                $this->session->set_flashdata('error', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Password Salah!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>      
            ');
                redirect('welcome');
            }
        } else {
            $this->session->set_flashdata('error', '
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Email Tidak Ditemukan! Silakan Registrasi Terlebih Dahulu.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>      
          ');
            redirect('welcome');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('welcome');
    }
}
