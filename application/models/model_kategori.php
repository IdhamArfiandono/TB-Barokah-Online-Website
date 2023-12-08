<?php

class Model_kategori extends CI_Model
{

    public function data_peralatan()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'Peralatan'));
    }

    public function data_bahan()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'Bahan'));
    }
}
