<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RumahSakit extends CI_Controller
{
	public function index()
	{
		$this->load->model('Rumah_sakit_model', 'faskes');

		$data['faskes'] = $this->faskes->getViewAll();

		$this->load->view('layouts/header');
		$this->load->view('rumahsakit/index', $data);
		$this->load->view('layouts/footer');
	}
	public function detail($id)
	{
		$this->load->model('Rumah_sakit_model', 'faskes');
		$this->load->model('Komentar_model', 'komentar');
		$this->load->model('Nilai_rating_model', 'rating');

		$data['faskes'] = $this->faskes->getViewById($id);
		$data['komentar'] = $this->komentar->getViewByFaskesId($id);
		$data['rating'] = $this->rating->getViewAll();

		$this->load->view('layouts/header');
		$this->load->view('rumahsakit/detail', $data);
		$this->load->view('layouts/footer');
	}

	public function indexbe()
	{
		$this->load->model('Rumah_sakit_model', 'faskes');

		$data['faskes'] = $this->faskes->getViewAllbe();
		$judul['title'] = 'Rumah sakit';
		$this->load->view('templates/admin_header', $judul);
		$this->load->view('templates/admin_sidebar');
		$this->load->view('rumahsakit/indexbe', $data);
		$this->load->view('templates/admin_footer');
	}
	public function detailbe($id)
	{
		$this->load->model('Rumah_sakit_model', 'faskes');
		$data['faskes'] = $this->faskes->getViewByIdbe($id);
		$this->load->view('templates/admin_header');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('rumahsakit/detailbe', $data);
		$this->load->view('templates/admin_footer');
	}

	public function deletebe($id)
	{
		$this->load->model('rumah_sakit_model', 'faskes');
		//mengecek data rumah sakit berdasarkan id
		$data['id'] = $id;
		$this->faskes->deletebe($data);
		redirect('rumahsakit', 'refresh');
	}

	public function update($id)
	{
		$this->load->model('rumah_sakit_model', 'faskes');
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
		redirect('rumahsakit', 'refresh');
	}

	public function edit($id)
	{
		// akses model mahasiswa 
		$this->load->model('rumah_sakit_model', 'faskes');
		$data['faskes'] = $this->faskes->getViewByIdbe($id);
		$this->load->view('templates/admin_header');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('rumahsakit/edit', $data);
		$this->load->view('templates/admin_footer');
	}
}
