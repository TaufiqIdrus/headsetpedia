<?php

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Manage User';
        $data['user'] = $this->User_model->getAllUser();
        if ($this->input->post('keyword')) {
            $data['user'] = $this->User_model->cariDataUser();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data User';
        $this->form_validation->set_rules('id_user', 'ID', 'required');
        $this->form_validation->set_rules('nama_user', 'Nama', 'required');
        $this->form_validation->set_rules('fullname_user', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('password_user', 'Password', 'required');
        $this->form_validation->set_rules('saldo_user', 'Saldo', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('user/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->User_model->tambahDataUser();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('user');
        }
    }

    public function hapus($id)
    {
        $this->User_model->hapusDataUser($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('user');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data User';
        $data['user'] = $this->User_model->getUserById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('user/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data User';
        $data['user'] = $this->User_model->getUserById($id);
        
        $this->form_validation->set_rules('nama_user', 'Nama', 'required');
        if ($this->form_validation->run() == false) { 
            $this->load->view('templates/header', $data);
            $this->load->view('user/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->User_model->ubahDataUser();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('user');
        }
    }
}
