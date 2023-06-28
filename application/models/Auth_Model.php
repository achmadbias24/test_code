<?php

class Auth_Model extends CI_Model
{
    public function GetUser($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('account')->result_array();
    }
}
