<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RumahSakit extends CI_Controller {
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
}
