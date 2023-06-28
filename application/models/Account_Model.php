<?php

class Account_Model extends CI_Model
{
    public function GetUser()
    {
        return $this->db->get('account')->result_array();
    }
    function SpesificUser($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('account')->result_array();
    }
    function DeleteUser($username)
    {
        $this->db->where('username', $username);
        $this->db->delete('account');
    }
    function UpdateUser($username, $password, $name, $role)
    {
        $data = array(
            'password' => $password,
            'name' => $name,
            'role' => $role
        );
        $this->db->where('username', $username);
        $this->db->update('account');
    }
}
