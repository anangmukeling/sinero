<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Guru_model');
    }
    public function index()
    {

        $data['judul'] = "Data Guru SMP N 2 Sidoharjo";
        $data['guru'] = $this->Guru_model->daftarGuru();
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar');
        $this->load->view('admin/guru', $data);
        $this->load->view('layout/footer');
    }
    public function hapus($nip)
    {
        $this->Guru_model->HapusDataGuru($nip);
        redirect('admin/guru');
    }
}
