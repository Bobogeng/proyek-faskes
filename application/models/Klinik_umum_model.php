<?php
class Klinik_umum_model extends CI_Model
{
    public function getViewAll()
    {
        $query = $this->db->query("SELECT a.id, a.nama, a.alamat, a.latlong, b.nama as jenis, a.deskripsi, a.skor_rating, a.foto1, a.foto2, a.foto3, c.nama as kecamatan, a.website, a.jumlah_dokter, a.jumlah_pegawai  FROM faskes a INNER JOIN jenis_faskes b ON a.jenis_id = b.id INNER JOIN kecamatan c ON a.kecamatan_id = c.id WHERE b.nama = 'Klinik Umum' ORDER BY RAND()");
        return $query->result_array();
    }
    public function getViewById($id)
    {
        $query = $this->db->query("SELECT a.id, a.nama, a.alamat, a.latlong, b.nama as jenis, a.deskripsi, a.skor_rating, a.foto1, a.foto2, a.foto3, c.nama as kecamatan, a.website, a.jumlah_dokter, a.jumlah_pegawai  FROM faskes a INNER JOIN jenis_faskes b ON a.jenis_id = b.id INNER JOIN kecamatan c ON a.kecamatan_id = c.id WHERE (a.id = $id AND b.nama = 'Klinik Umum')");
        if ($query->num_rows() == 0) {
            redirect("klinikumum/home");
        } else {
            return $query->row();
        }
    }
}