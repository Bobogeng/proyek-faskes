<?php
class Komentar_model extends CI_Model
{
    public function getViewAll()
    {
        $query = $this->db->query("SELECT a.id, a.tanggal, a.isi, b.username, a.faskes_id, a.nilai_rating_id FROM komentar a INNER JOIN users b ON a.users_id = b.id ORDER BY RAND()");
        return $query->result_array();
    }
    public function getViewByFaskesId($id)
    {
        $query = $this->db->query("SELECT a.id, a.tanggal, a.isi, b.username, a.faskes_id, a.nilai_rating_id FROM komentar a INNER JOIN users b ON a.users_id = b.id WHERE a.faskes_id = $id");
        return $query->result_array();
    }
}