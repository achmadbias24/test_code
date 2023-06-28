<?php

class Post_Model extends CI_Model
{
    function getPost()
    {
        return $this->db->get('post')->result_array();
    }
}
