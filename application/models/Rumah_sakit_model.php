<?php
class Rumah_sakit_model extends CI_Model
{
    public function getViewAll()
    {
        $query = $this->db->query("SELECT a.id, a.nama, a.alamat, a.latlong, b.nama as jenis, a.deskripsi, a.skor_rating, a.foto1, a.foto2, a.foto3, c.nama as kecamatan, a.website, a.jumlah_dokter, a.jumlah_pegawai  FROM faskes a INNER JOIN jenis_faskes b ON a.jenis_id = b.id INNER JOIN kecamatan c ON a.kecamatan_id = c.id WHERE b.nama = 'Rumah Sakit' ORDER BY RAND()");
        return $query->result_array();
    }
    public function getViewById($id)
    {
        $query = $this->db->query("SELECT a.id, a.nama, a.alamat, a.latlong, b.nama as jenis, a.deskripsi, a.skor_rating, a.foto1, a.foto2, a.foto3, c.nama as kecamatan, a.website, a.jumlah_dokter, a.jumlah_pegawai  FROM faskes a INNER JOIN jenis_faskes b ON a.jenis_id = b.id INNER JOIN kecamatan c ON a.kecamatan_id = c.id WHERE (a.id = $id AND b.nama = 'Rumah Sakit')");
        if ($query->num_rows() == 0) {
            redirect("rumahsakit/index");
        } else {
            return $query->row();
        }
    }

    public function getViewAllbe()
    {
        $query = $this->db->query("SELECT a.id, a.nama, a.alamat, a.latlong, b.nama as jenis, a.deskripsi, a.skor_rating, a.foto1, a.foto2, a.foto3, c.nama as kecamatan, a.website, a.jumlah_dokter, a.jumlah_pegawai  FROM faskes a INNER JOIN jenis_faskes b ON a.jenis_id = b.id INNER JOIN kecamatan c ON a.kecamatan_id = c.id WHERE b.nama = 'Rumah Sakit'");
        return $query->result_array();
    }
    public function getViewByIdbe($id)
    {
        $query = $this->db->query("SELECT a.id, a.nama, a.alamat, a.latlong, b.nama as jenis, a.deskripsi, a.skor_rating, a.foto1, a.foto2, a.foto3, c.nama as kecamatan, a.website, a.jumlah_dokter, a.jumlah_pegawai  FROM faskes a INNER JOIN jenis_faskes b ON a.jenis_id = b.id INNER JOIN kecamatan c ON a.kecamatan_id = c.id WHERE (a.id = $id AND b.nama = 'Rumah Sakit')");
        return $query->row();
    }

    public function deletebe($data)
    {
        //hapus data rumah sakit
        $sql1 = "DELETE FROM komentar WHERE faskes_id=?";
        $sql = "DELETE FROM faskes WHERE id=?";
        $this->db->query($sql1, $data);
        $this->db->query($sql, $data);
    }

    public function update($data)
    {
        $sql = "UPDATE faskes SET nama=?, alamat=?, latlong=?, deskripsi=?, foto1=?, foto2=?, foto3=?, kecamatan_id=? website=?, jumlah_dokter=?, jumlah_pegawai=? WHERE id=?";
        $this->db->query($sql, $data);
    }
}
