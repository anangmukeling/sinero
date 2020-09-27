<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Guru_model');
    }
    public function index()
    {

        // $data['judul'] = "Data Guru SMP N 2 Sidoharjo";
        // $data['guru'] = $this->Guru_model->daftarGuru();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('layout/topbar');
        $this->load->view('admin/siswa');
        $this->load->view('layout/footer');
    }
    // public function hapus($nip)
    // {
    //     $this->Guru_model->HapusDataGuru($nip);
    //     redirect('admin/guru');
    // }
    // public function tambah()
    // {

    //     $this->Guru_model->tambahDataGuru($_POST);
    //     redirect('admin/guru');
    // }
    // public function ubah()
    // {
    //     $this->Guru_model->ubahDataGuru($_POST);
    //     redirect('admin/guru');
    // }
}
