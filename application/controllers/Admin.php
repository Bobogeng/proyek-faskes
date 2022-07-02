<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {

        $data['title'] = 'Admin';

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar');
        $this->load->view('admin/index');
        $this->load->view('templates/admin_footer');
    }
}
