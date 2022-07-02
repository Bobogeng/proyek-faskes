<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Apotik extends CI_Controller
{
	public function index()
	{
		$this->load->model('Apotik_model', 'faskes');

		$data['faskes'] = $this->faskes->getViewAll();

		$this->load->view('layouts/header');
		$this->load->view('apotik/index', $data);
		$this->load->view('layouts/footer');
	}
	public function detail($id)
	{
		$this->load->model('Apotik_model', 'faskes');
		$this->load->model('Komentar_model', 'komentar');
		$this->load->model('Nilai_rating_model', 'rating');

		$data['faskes'] = $this->faskes->getViewById($id);
		$data['komentar'] = $this->komentar->getViewByFaskesId($id);
		$data['rating'] = $this->rating->getViewAll();

		$this->load->view('layouts/header');
		$this->load->view('apotik/detail', $data);
		$this->load->view('layouts/footer');
	}

	public function indexbe()
	{
		$this->load->model('Apotik_model', 'faskes');

		$data['faskes'] = $this->faskes->getViewAllbe();
		$judul['title'] = 'Apotik';
		$this->load->view('templates/admin_header', $judul);
		$this->load->view('templates/admin_sidebar');
		$this->load->view('apotik/indexbe', $data);
		$this->load->view('templates/admin_footer');
	}
	public function detailbe($id)
	{
		$this->load->model('Apotik_model', 'faskes');
		$data['faskes'] = $this->faskes->getViewByIdbe($id);
		$this->load->view('templates/admin_header');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('apotik/detailbe', $data);
		$this->load->view('templates/admin_footer');
	}

	public function deletebe($id)
	{
		$this->load->model('apotik_model', 'faskes');
		//mengecek data rumah sakit berdasarkan id
		$data['id'] = $id;
		$this->faskes->deletebe($data);
		redirect('apotik', 'refresh');
	}

	public function update($id)
	{
		$this->load->model('apotik_model', 'faskes');
		$_nama = $this->input->post('nama');
		$_alamat = $this->input->post('alamat');
		$_latlong = $this->input->post('latlong');
		$_deskripsi = $this->input->post('deskripsi');
		$_foto1 = $this->input->post('foto1');
		$_foto2 = $this->input->post('foto2');
		$_foto3 = $this->input->post('foto3');
		$_kecamatan = $this->input->post('kecamatan');
		$_website = $this->input->post('website');
		$_jumlah_dokter = $this->input->post('jumlah_dokter');
		$_jumlah_pegawai = $this->input->post('jumlah_pegawai');

		$data = array('nama' => $_nama, 'alamat' => $_alamat, 'latlong' => $_latlong, 'deskripsi' => $_deskripsi, 'foto1' => $_foto1, 'foto2' => $_foto2, 'foto3' => $_foto3, 'kecamatan' => $_kecamatan, 'website' => $_website, 'jumlah_dokter' => $_jumlah_dokter, 'jumlah_pegawai' => $_jumlah_pegawai, 'id' => $id);
		$this->rs->update($data);
		redirect('apotik', 'refresh');
	}

	public function edit($id)
	{
		// akses model mahasiswa 
		$this->load->model('apotik_model', 'faskes');
		$data['faskes'] = $this->faskes->getViewByIdbe($id);
		$this->load->view('templates/admin_header');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('apotik/edit', $data);
		$this->load->view('templates/admin_footer');
	}
}
