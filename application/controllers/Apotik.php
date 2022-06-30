<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apotik extends CI_Controller {
	public function index()
	{
        $this->load->model('Faskes_model', 'faskes');

        $data['faskes'] = $this->faskes->getViewApotik();

		$this->load->view('layouts/header');
		$this->load->view('apotik/index', $data);
		$this->load->view('layouts/footer');
	}
    public function detail($id)
	{
        $this->load->model('Faskes_model', 'faskes');
        $this->load->model('Komentar_model', 'komentar');
        $this->load->model('Nilai_rating_model', 'rating');

        $data['faskes'] = $this->faskes->getViewById($id);
        $data['komentar'] = $this->komentar->getViewByFaskesId($id);
        $data['rating'] = $this->rating->getViewAll();

		$this->load->view('layouts/header');
		$this->load->view('apotik/detail', $data);
		$this->load->view('layouts/footer');
	}
}
