<?php
class Guru_model extends CI_Model
{
    public function daftarGuru()
    {
        return $query = $this->db->get('tb_guru')->result_array();
    }

    public function HapusDataGuru($nip)
    {
        // $this->db->where('id', $id);
        $this->db->delete('tb_guru', ['nip' => $nip]);
    }
}
