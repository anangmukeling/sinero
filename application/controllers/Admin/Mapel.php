<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mapel_model');
    }

    public function index()
    {

        $data['judul'] = "Data Mata Pelajaran SMP N 2 Sidoharjo";
        $data['mapel'] = $this->Mapel_model->datamapel();
        $data['matapelajaran'] = $this->Mapel_model->matapelajaran()->result_array();
        $data['guru'] = $this->Mapel_model->dataguru()->result_array();
        $data['siswa'] = $this->Mapel_model->datasiswa()->result_array();
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/topbar');
        $this->load->view('admin/matapelajaran');
        $this->load->view('layout/footer');
    }

    public function hapus()
    {
        $id = $this->input->get('id');
        $this->Mapel_model->hapusmapel($id);
        redirect('admin/Mapel');
    }

    public function ubah()
    {
        $idmengajar = $this->input->post('idmengajar');
        $namaguru = $this->Mapel_model->dataguru($this->input->post('guru'))->row_array();
        $namasiswa = $this->Mapel_model->datasiswa($this->input->post('siswa'))->row_array();
        $idmapel = $this->input->post('idmapel');

        $data = [
            'id_mengajar' => $idmengajar,
            'nip'         => $namaguru['id_guru'],
            'id_mapel'    => $idmapel,
            'nis'         => $namasiswa['nis'],
            'id_guru'     => $namaguru['id_guru']
        ];

        $this->Mapel_model->ubah($data);
        redirect('admin/mapel');
    }

    public function tambah()
    {
        $namaguru = $this->Mapel_model->dataguru($this->input->post('guru'))->row_array();
        $namasiswa = $this->Mapel_model->datasiswa($this->input->post('siswa'))->row_array();
        $idmapel = $this->Mapel_model->matapelajaran($this->input->post('idmapel'))->row_array();

        $data = [
            'id_mengajar' => '',
            'nip'         => $namaguru['id_guru'],
            'id_mapel'    => $idmapel['id_mapel'],
            'nis'         => $namasiswa['nis'],
            'id_guru'     => $namaguru['id_guru']
        ];

        $this->Mapel_model->tambahmapel($data);
        redirect('admin/mapel');
    }
}
