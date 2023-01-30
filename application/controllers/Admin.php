<?php

class Admin extends CI_Controller {

    public function index ()
    {
        $data = array(
                        'title' => 'MIM 15 Sidomukti',
                        'title_1' => 'Dashboard',
                        'isi'   => 'admin/v_home'
                );
        $this->load->view('admin/layout/v_wrapper', $data, false);
    }

}

/* Akhir file Home.php */