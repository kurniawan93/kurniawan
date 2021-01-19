<?php

class dashboard extends CI_Controller
{

    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('barang/index', $data);
        $this->load->view('template/footer');
    }
}
