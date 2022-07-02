<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KlinikUmum extends CI_Controller {
	public function index()
	{
        $this->load->model('Klinik_umum_model', 'faskes');

        $data['faskes'] = $this->faskes->getViewAll();

		$this->load->view('layouts/header');
		$this->load->view('klinikumum/index', $data);
		$this->load->view('layouts/footer');
	}
    public function detail($id)
	{
        $this->load->model('Klinik_umum_model', 'faskes');
        $this->load->model('Komentar_model', 'komentar');
        $this->load->model('Nilai_rating_model', 'rating');

        $data['faskes'] = $this->faskes->getViewById($id);
        $data['komentar'] = $this->komentar->getViewByFaskesId($id);
        $data['rating'] = $this->rating->getViewAll();

		$this->load->view('layouts/header');
		$this->load->view('klinikumum/detail', $data);
		$this->load->view('layouts/footer');
	}
}
