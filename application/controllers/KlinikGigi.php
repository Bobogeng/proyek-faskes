<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KlinikGigi extends CI_Controller
{
	public function index()
	{
		$this->load->model('Klinik_gigi_model', 'faskes');

		$data['faskes'] = $this->faskes->getViewAll();

		$this->load->view('layouts/header');
		$this->load->view('klinikgigi/index', $data);
		$this->load->view('layouts/footer');
	}
    public function detail($id)
	{
		$this->load->model('User_model', 'user');
		$this->load->model('Klinik_gigi_model', 'faskes');
		$this->load->model('Komentar_model', 'komentar');
		$this->load->model('Nilai_rating_model', 'rating');

		$data['user'] = $this->user->getUserByUsername($this->session->userdata('username'));
		$data['faskes'] = $this->faskes->getViewById($id);
		$data['komentar'] = $this->komentar->getViewByFaskesId($id);
		$data['rating'] = $this->rating->getViewAll();

		$this->load->view('layouts/header');
		$this->load->view('klinikgigi/detail', $data);
		$this->load->view('layouts/footer');
	}
    public function save()
    {
		$this->load->model('Komentar_model', 'komentar');
		$this->load->model('User_model', 'user');

		$_isi = $this->input->post('isi');
		$_users = $this->input->post('username');
		$_faskes = $this->input->post('faskes');
		$_rating = $this->input->post('rating');

		$data = array('tanggal' => date('Y-m-d'), 'isi' => $_isi, 'users_id' => $_users, 'faskes_id' => $_faskes, 'nilai_rating_id' => $_rating);
		$this->komentar->insert($data);
		redirect('klinikgigi', 'refresh');
    }    

	public function indexbe()
	{
        if($this->session->userdata('role') != "administrator"){
			redirect(base_url("auth"));
		}
		$this->load->model('Klinik_gigi_model', 'faskes');

		$data['faskes'] = $this->faskes->getViewAllbe();
		$judul['title'] = 'Klinik gigi';
		$this->load->view('templates/admin_header', $judul);
		$this->load->view('templates/admin_sidebar');
		$this->load->view('klinikgigi/indexbe', $data);
		$this->load->view('templates/admin_footer');
	}
	public function detailbe($id)
	{
        if($this->session->userdata('role') != "administrator"){
			redirect(base_url("auth"));
		}
		$this->load->model('Klinik_gigi_model', 'faskes');
		$data['faskes'] = $this->faskes->getViewByIdbe($id);
		$this->load->view('templates/admin_header');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('klinikgigi/detailbe', $data);
		$this->load->view('templates/admin_footer');
	}

	public function deletebe($id)
	{
        if($this->session->userdata('role') != "administrator"){
			redirect(base_url("auth"));
		}
		$this->load->model('klinik_gigi_model', 'faskes');
		//mengecek data rumah sakit berdasarkan id
		$data['id'] = $id;
		$this->faskes->deletebe($data);
		redirect('klinikgigiindexbe', 'refresh');
	}

	public function form()
    {
        if($this->session->userdata('role') != "administrator"){
			redirect(base_url("auth"));
		}
        $this->load->model('Jenis_faskes_model', 'jenis');
        $this->load->model('Kecamatan_model', 'kecamatan');
		$data['jenis'] = $this->jenis->getViewAllbe();
		$data['kecamatan'] = $this->kecamatan->getViewAllbe();
        
        $this->load->view('templates/admin_header');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('klinikgigi/form', $data);
		$this->load->view('templates/admin_footer');
    }

	public function insert()
	{
        if($this->session->userdata('role') != "administrator"){
			redirect(base_url("auth"));
		}
		$this->load->model('Klinik_gigi_model', 'faskes');
		$_nama = $this->input->post('nama');
		$_alamat = $this->input->post('alamat');
		$_latlong = $this->input->post('latlong');
		$_jenis = $this->input->post('jenis');
		$_deskripsi = $this->input->post('deskripsi');
		$_kecamatan = $this->input->post('kecamatan');
		$_website = $this->input->post('website');
		$_jumlah_dokter = $this->input->post('jumlah_dokter');
		$_jumlah_pegawai = $this->input->post('jumlah_pegawai');

		$data = array('nama' => $_nama, 'alamat' => $_alamat, 'latlong' => $_latlong, 'jenis' => $_jenis, 'deskripsi' => $_deskripsi, 'kecamatan' => $_kecamatan, 'website' => $_website, 'jumlah_dokter' => $_jumlah_dokter, 'jumlah_pegawai' => $_jumlah_pegawai);
		$this->faskes->insert($data);
		redirect('klinikgigi/indexbe', 'refresh');
	}

	public function update($id)
	{
        if($this->session->userdata('role') != "administrator"){
			redirect(base_url("auth"));
		}
		$this->load->model('Klinik_gigi_model', 'faskes');
		$_nama = $this->input->post('nama');
		$_alamat = $this->input->post('alamat');
		$_latlong = $this->input->post('latlong');
		$_deskripsi = $this->input->post('deskripsi');
		$_kecamatan = $this->input->post('kecamatan');
		$_website = $this->input->post('website');
		$_jumlah_dokter = $this->input->post('jumlah_dokter');
		$_jumlah_pegawai = $this->input->post('jumlah_pegawai');

		$data = array('nama' => $_nama, 'alamat' => $_alamat, 'latlong' => $_latlong, 'deskripsi' => $_deskripsi, 'kecamatan' => $_kecamatan, 'website' => $_website, 'jumlah_dokter' => $_jumlah_dokter, 'jumlah_pegawai' => $_jumlah_pegawai, 'id' => $id);
		$this->faskes->update($data);
		redirect('klinikgigi/indexbe', 'refresh');
	}

	public function edit($id)
	{
        if($this->session->userdata('role') != "administrator"){
			redirect(base_url("auth"));
		}
		$this->load->model('klinik_gigi_model', 'faskes');
		$data['faskes'] = $this->faskes->getViewByIdbe($id);
		$this->load->view('templates/admin_header');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('klinikgigi/edit', $data);
		$this->load->view('templates/admin_footer');
	}

    public function upload() {
        if($this->session->userdata('role') != "administrator"){
			redirect(base_url("auth"));
		}
        $this->load->model('Klinik_gigi_model', 'faskes');
        $id = $this->input->post('id'); 
        $listfoto = $this->input->post('listfoto'); 
        $path = $this->input->post('path'); 
        $jenis = $this->input->post('jenisfoto'); 
        $nama = $this->input->post('namafoto'); 

        $data['faskes'] = $this->faskes->getViewByIdbe($id);

        $config['upload_path'] = './uploads/'.$jenis.'/'.$path.'/';
        $config['allowed_types'] = 'jpg|png';
        $config['overwrite'] = true;
        $config['max_size'] = 2894;
        $config['max_width'] = 2894;
        $config['max_height'] = 2894;

        $array = explode('.', $_FILES[$listfoto]['name']);
        $extension = end($array);

        $new_name = $nama.'.'.$extension;

        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($listfoto)) {
            $error = array('error' => $this->upload->display_errors());
            die(print_r($error));
            $this->load->view('upload_form', $error);
        } else {
            $list_foto = $listfoto;
            $array_data[] = $new_name;
            $array_data[] = $id;
            $this->faskes->updateFoto($list_foto, $array_data);
            $data['error'] = 'data sukses';
            $data['upload_data'] = $this->upload->data();
		    redirect('klinikgigi/indexbe', 'refresh');
        }

        $this->load->view('templates/admin_header');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('klinikgigi/edit', $data);
		$this->load->view('templates/admin_footer');
    }
}
