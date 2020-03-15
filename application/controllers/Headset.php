<?php

class Headset extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Headset_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Manage Headset';
        $data['headset'] = $this->Headset_model->getAllHeadset();
        if ($this->input->post('keyword')) {
            $data['headset'] = $this->Headset_model->cariDataHeadset();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('headset/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Headset';
        $this->form_validation->set_rules('id_headset', 'ID', 'required');
        $this->form_validation->set_rules('nama_headset', 'Nama', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('stok', 'Stok', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('headset/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Headset_model->tambahDataHeadset();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('headset');
        }
    }

    public function hapus($id)
    {
        $this->Headset_model->hapusDataHeadset($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('headset');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Headset';
        $data['headset'] = $this->Headset_model->getHeadsetById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('headset/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Headset';
        $data['headset'] = $this->Headset_model->getHeadsetById($id);

        $this->form_validation->set_rules('nama_headset', 'Nama', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('headset/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Headset_model->ubahDataHeadset();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('headset');
        }
    }
}
