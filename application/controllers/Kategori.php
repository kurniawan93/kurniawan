<?php

class Kategori extends CI_Controller
{


    public function pakaian_pria()
    {
        $data['pakaian_pria'] = $this->model_kategori->pakaian_pria()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('barang/kategori_pria', $data);
        $this->load->view('template/footer');
    }
    public function pakaian_wanita()
    {
        $data['pakaian_wanita'] = $this->model_kategori->pakaian_wanita()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('barang/kategori_wanita', $data);
        $this->load->view('template/footer');
    }
}
