<?php

class model_kategori extends CI_Model
{

    public function pakaian_pria()
    {
        return  $this->db->get_where('tb_barang', array('kategori' => 'pakaian pria'));
    }
    public function pakaian_wanita()
    {
        return  $this->db->get_where('tb_barang', array('kategori' => 'pakaian wanita'));
    }
}
