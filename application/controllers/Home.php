<?php 

class Home extends CI_Controller {
    
    public function index($nama = '')
    {
        $this->load->helper('form');
        $this->load->helper('captcha');
        $this->load->helper('date');
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $nama;
        
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}