<?php
class Homeadmin_model extends CI_Model
{
    public function jumlahGuru()
    {
        $this->db->count_all('tb_guru');
    }
}
