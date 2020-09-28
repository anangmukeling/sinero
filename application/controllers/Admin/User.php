<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Guru_model');
    }

    public function index()
    {
        $data['judul'] = "Data User SMP Negeri 2 Sidoharjo";
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar');
        $this->load->view('admin/datauser', $data);
        $this->load->view('layout/footer');
    }
}
