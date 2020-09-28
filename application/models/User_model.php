<?php
class User_model extends CI_Model
{

    public function datamapel()
    {
        $query = "SELECT * FROM tb_mengajar JOIN tb_mapel 
                    ON tb_mengajar.id_mapel=tb_mapel.id_mapel 
                    JOIN tb_guru ON tb_mengajar.nip=tb_guru.id_guru 
                    ORDER BY nama_mapel ASC";
        $mengajar = $this->db->query($query)->result_array();
        return $mengajar;
    }
}
