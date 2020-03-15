<?php

class Toko extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Toko_model');
        $this->load->model('Headset_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Headset';
        $data['headset'] = $this->Headset_model->getAllHeadset();

        $this->load->view('templates/header_toko', $data);
        $this->load->view('toko/index', $data);
        $this->load->view('templates/footer_toko');
    }

    public function home_toko()
    {
        $data['judul'] = 'Home Toko';
        $data['headset'] = $this->Headset_model->getAllHeadset();
        if ($this->input->post('keyword')) {
            $data['headset'] = $this->Headset_model->cariDataHeadset();
        }
        $this->load->view('templates/header_toko', $data);
        $this->load->view('toko/home', $data);
        $this->load->view('templates/footer_toko');
    }

    public function pembelian($id = null)
    {
        $data['judul'] = 'pembelian Headset';
        $data['headset'] = $this->Toko_model->getHeadsetById($id);
        if ($this->input->post('id_user')) {
            $data['user'] = $this->Toko_model->getUserById($this->input->post('id_user'));
            $this->load->view('templates/header_toko', $data);
            $this->load->view('toko/beli_confirm', $data);
            $this->load->view('templates/footer_toko');
            if ($this->input->post('beli') == 'beli') {
                $this->Toko_model->beliHeadset();
                $this->Toko_model->beliHeadsetUser();
                $this->Toko_model->catatRiwayat();
                $this->session->set_flashdata('flash', 'Dibeli');
                redirect('toko/index');
            }
        } else {
            $this->load->view('templates/header_toko', $data);
            $this->load->view('toko/beli', $data);
            $this->load->view('templates/footer_toko');
        }
    }
}
