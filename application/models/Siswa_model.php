<?php
class Siswa_model extends CI_Model
{
    public function daftarGuru()
    {
        $this->db->order_by('nip', 'ASC');
        return $query = $this->db->get('tb_guru')->result_array();
    }

    public function HapusDataGuru($nip)
    {
        // $this->db->where('id', $id);
        $this->db->delete('tb_guru', ['nip' => $nip]);
    }
    public function tambahDataGuru($guru)
    {
        $data = array(
            'nip' => $guru['nip'],
            'nama' => $guru['nama'],
            'alamat' => $guru['alamat'],
            'jenkel' => $guru['jenkel'],
            'email' => $guru['email'],
            'nohp' => $guru['nohp'],
            'agama' => $guru['agama'],
            'tempat_lahir' => $guru['tempat'],
            'tgl_lahir' => $guru['tgl'],
            'nip' => $guru['nip'],
            'jabatan' => $guru['jabatan'],

        );

        $this->db->insert('tb_guru', $data);
    }
    public function ubahDataGuru($guru)
    {
        $data = array(
            'id_guru' => $guru['id_guru'],
            'nip' => $guru['nip'],
            'nama' => $guru['nama'],
            'alamat' => $guru['alamat'],
            'jenkel' => $guru['jenkel'],
            'email' => $guru['email'],
            'nohp' => $guru['nohp'],
            'agama' => $guru['agama'],
            'tempat_lahir' => $guru['tempat'],
            'tgl_lahir' => $guru['tgl'],
            'nip' => $guru['nip'],
            'jabatan' => $guru['jabatan'],

        );
        $this->db->where('id_guru', $guru['id_guru']);
        $this->db->replace('tb_guru', $data);
    }
}
