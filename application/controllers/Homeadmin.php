<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homeadmin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Homeadmin_model');
    }
    public function index()
    {
        $data['guru'] = $this->Homeadmin_model->jumlahGuru();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('layout/topbar');
        $this->load->view('admin/homeadmin', $data);
        $this->load->view('layout/footer');
    }
}
