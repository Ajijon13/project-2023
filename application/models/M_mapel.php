<?php

class M_mapel extends CI_Model
{

    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tbl_mapel');
        $this->db->order_by('id_mapel', 'desc');
        return $this->db->get()->result();
    }

    public function tambah($data)
    {
        $this->db->insert('tbl_mapel', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_mapel', $data['id_mapel']);
        $this->db->update('tbl_mapel', $data);
    }
}


