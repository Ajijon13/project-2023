<?php

class Mapel extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_mapel');
    }

    public function index()
    {
        $data = array(
            'title' => 'MIM 15 Sidomukti',
            'title_1' => 'Mata Pelajaran',
            'mapel' => $this->m_mapel->lists(),
            'isi'   => 'admin/v_mapel'
        );
        $this->load->view('admin/layout/v_wrapper', $data, false);
    }

    
    public function tambah()
    {
        $data = array(
            'nama_mapel' => $this->input->post('nama_mapel')
        );
        $this->m_mapel->tambah($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');

        redirect('mapel');
    }

    public function edit($id_mapel) 
    {
        $data = array(
            'id_mapel' => $id_mapel,
            'nama_mapel' => $this->input->post('nama_mapel')
        );

        $this->m_mapel->edit($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');

        redirect('mapel');
    }

}
/* Akhir file Home.php */