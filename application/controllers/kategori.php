<?php

class Kategori extends CI_Controller
{
    public function peralatan()
    {
        $data['peralatan'] = $this->model_kategori->data_peralatan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('peralatan', $data);
        $this->load->view('templates/footer');
    }

    public function bahan()
    {
        $data['bahan'] = $this->model_kategori->data_bahan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('bahan', $data);
        $this->load->view('templates/footer');
    }
}
