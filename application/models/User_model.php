<?php

use GuzzleHttp\Client;

class User_model extends CI_model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/server_user/api/user',
            'auth' => ['admin', '1234']
        ]);
    }

    public function getAllUser()
    {
        $response = $this->_client->request('GET', 'user', [
            'query' => [
                'kunci' => 'joss']
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function tambahDataUser()
    {
        $data = [
            "id_user" => $this->input->post('id_user', true),
            "nama_user" => $this->input->post('nama_user', true),
            "fullname_user" => $this->input->post('fullname_user', true),
            "password_user" => $this->input->post('password_user', true),
            "saldo_user" => $this->input->post('saldo_user', true),
            "level" => $this->input->post('level', true),
            'kunci' => 'joss'
        ];
        $response = $this->_client->request('POST', 'user', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function hapusDataUser($id)
    {
        $response = $this->_client->request('DELETE', 'user', [
            'form_params' => [
                'id'  => $id,
                'kunci' => 'joss'
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function getUserById($id)
    {
        $response = $this->_client->request('GET', 'user', [
            'query' => [
                'id' => $id,
                'kunci' => 'joss'
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'][0];
    }

    public function ubahDataUser()
    {
        $data = [
            "id_user" => $this->input->post('id_user', true),
            "nama_user" => $this->input->post('nama_user', true),
            "fullname_user" => $this->input->post('fullname_user', true),
            "password_user" => $this->input->post('password_user', true),
            "saldo_user" => $this->input->post('saldo_user', true),
            "level" => $this->input->post('level', true),
            "id" => $this->input->post('id_user', true),
            'kunci' => 'joss'
        ];
        $response = $this->_client->request('PUT', 'user', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function cariDataUser()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('nim', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('tb_mhs')->result_array();
    }
}
