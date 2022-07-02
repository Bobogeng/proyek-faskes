<?php

class User_model extends CI_Model
{
    public function getUser()
    {
        return $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
    }
}
