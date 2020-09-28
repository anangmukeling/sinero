<?php
class Mapel_model extends CI_Model
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

    public function dataguru($data = null)
    {
        $query = "SELECT * FROM tb_guru";

        if ($data != null) {
            $query = "SELECT * FROM tb_guru where nama ='$data'";
        }
        $guru = $this->db->query($query);
        return $guru;
    }

    public function matapelajaran($data = null)
    {
        $query = "SELECT * FROM tb_mapel";

        if ($data != null) {
            $query = "SELECT * FROM  tb_mapel WHERE nama_mapel = '$data'";
        }
        $matapelajaran = $this->db->query($query);
        return $matapelajaran;
    }

    public function datasiswa($data = null)
    {
        $query = "SELECT * FROM tb_siswa";

        if ($data != null) {
            $query = "SELECT * FROM tb_siswa where nama ='$data'";
        }
        $guru = $this->db->query($query);
        return $guru;
    }

    public function ubah($data)
    {
        $this->db->update('tb_mengajar', $data);
    }

    public function hapusmapel($id)
    {
        $this->db->where('id_mengajar', $id);
        $this->db->delete('tb_mengajar');
    }

    public function tambahmapel($data)
    {
        $this->db->insert('tb_mengajar', $data);
    }
}
