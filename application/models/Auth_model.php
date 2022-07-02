<?php

class Auth_model extends CI_Model
{

  public function simpan($data)
  {
    $sql = "INSERT INTO users (username, password, email, created_at, last_login, status, role) VALUES(?,?,?,?,?,?,?)";
    $this->db->query($sql, $data);
  }

  public function _getWhereUser($data)
  {
    return $this->db->get_where('users', ['username' => $data])->row_array();
  }
}
