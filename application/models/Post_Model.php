<?php

class Post_Model extends CI_Model
{
    function getPost()
    {
        return $this->db->get('post')->result_array();
    }
    function add($title, $content)
    {
        $data = array(
            'title' => $title,
            'content' => $content,
            'date' => date('Y-m-d H:i:s'),
            'username' => $this->session->userdata('username')
        );
        $this->db->insert('post', $data);
    }
    function SpesificPost($id)
    {
        $this->db->where('idpost', $id);
        return $this->db->get('post')->result_array();
    }
    function update($title, $content, $id)
    {
        $data = array(
            'title' => $title,
            'content' => $content,
            'date' => date('Y-m-d H:i:s'),
            'username' => $this->session->userdata('username')
        );
        $this->db->where('idpost', $id);
        $this->db->update('post', $data);
    }
    function delete($id)
    {
        $this->db->where('idpost', $id);
        $this->db->delete('post');
    }
}
