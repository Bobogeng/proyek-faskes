<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JenisFaskes extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
        if($this->session->userdata('role') != "administrator"){
			redirect(base_url("auth"));
		}
    }
    public function indexbe()
	{
		$this->load->model('Jenis_faskes_model', 'faskes');

		$data['faskes'] = $this->faskes->getViewAllbe();
		$judul['title'] = 'Jenis Faskes';
		$this->load->view('templates/admin_header', $judul);
		$this->load->view('templates/admin_sidebar');
		$this->load->view('jenisfaskes/indexbe', $data);
		$this->load->view('templates/admin_footer');
	}
    public function insert()
	{
		$this->load->model('Jenis_faskes_model', 'faskes');
		$_nama = $this->input->post('nama');
		$data = array('nama' => $_nama);
		$this->faskes->insert($data);
		redirect('jenisfaskes/indexbe', 'refresh');
	}
    public function update($id)
	{
		$this->load->model('Jenis_faskes_model', 'faskes');
		$_nama = $this->input->post('nama');
		$data = array('nama' => $_nama, 'id' => $id);
		$this->faskes->update($data);
		redirect('jenisfaskes/indexbe', 'refresh');
	}
    public function form()
    {
		$this->load->view('templates/admin_header');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('jenisfaskes/form');
		$this->load->view('templates/admin_footer');
    }
    public function edit($id)
	{
		$this->load->model('Jenis_faskes_model', 'faskes');
		$data['faskes'] = $this->faskes->getViewByIdbe($id);
		$this->load->view('templates/admin_header');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('jenisfaskes/edit', $data);
		$this->load->view('templates/admin_footer');
	}
    public function delete($id)
    {
        $this->load->model('Jenis_faskes_model', 'faskes');
		$data['id'] = $id;
		$this->faskes->delete($data);
		redirect('jenisfaskes/indexbe', 'refresh');
    }
}
?>