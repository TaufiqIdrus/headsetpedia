<?php

class Riwayat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Riwayat_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Riwayat Pembelian';
        $data['riwayat'] = $this->Riwayat_model->getAllRiwayat();
        if ($this->input->post('keyword')) {
            $data['riwayat'] = $this->Riwayat_model->cariDataRiwayat();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('riwayat/index', $data);
        $this->load->view('templates/footer');
    }

}
