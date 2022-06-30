<?php
class Nilai_rating_model extends CI_Model
{
    public function getViewAll()
    {
        $query = $this->db->get('nilai_rating');
        return $query->result_array();
    }
}