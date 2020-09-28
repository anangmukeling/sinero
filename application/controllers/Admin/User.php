<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Guru_model');
        $this->load->model('Siswa_model');
    }

    public function index()
    {
        $data['judul'] = "Data User SMP Negeri 2 Sidoharjo";
        $data['role'] = $this->input->post('role');

        $siswa = $this->input->post('siswa');
        $guru = $this->input->post('guru');

        if ($data['role'] == null || $data['role'] == 1) {
            $data['role'] = 1;
            if ($siswa == null) {
                $data['user'] = $this->Siswa_model->daftarSiswa();
            } else {
                //fitur search siswa pada data user
                //note belum jadi
                $data['user'] = $this->Siswa_model->daftarSiswa();
            }
        } else if ($data['role'] == 2) {
            if ($guru == null) {
                $data['user'] = $this->Guru_model->daftarGuru();
            } else {
                //fitur search guru pada data user
                $data['user'] = $this->Guru_model->daftarGuru($guru);
            }
        }

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/topbar');
        $this->load->view('admin/datauser', $data);
        $this->load->view('layout/footer');
    }

    public function cari()
    {
        $siswa = $this->input->post('siswa');
        $guru = $this->input->post('guru');
        $data['role'] = $this->input->post('role');

        if ($siswa == true) {
            echo "belum bisa di pakai untuk siswa";
            redirect('admin/user');
        } elseif ($guru == true) {
            $this->Guru_model->daftarGuru($guru);
            redirect('admin/user', 'post', $data['role']);
        }
    }
}
