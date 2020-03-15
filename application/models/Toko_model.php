<?php

use GuzzleHttp\Client;

class Toko_model extends CI_model
{
    private $_client;
    private $user;
    private $riwayat;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/server_headset/api/headset',
            'auth' => ['admin', '1234']
        ]);

        $this->user = new Client([
            'base_uri' => 'http://localhost/server_user/api/user',
            'auth' => ['admin', '1234']
        ]);

        $this->riwayat = new Client([
            'base_uri' => 'http://localhost/server_user/api/riwayat',
            'auth' => ['admin', '1234']
        ]);
    }

    public function getHeadsetById($id)
    {
        $response = $this->_client->request('GET', 'headset', [
            'query' => [
                'id' => $id,
                'kunci' => 'joss'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'][0];
    }

    public function getUserById($id)
    {
        $response = $this->user->request('GET', 'user', [
            'query' => [
                'id' => $id,
                'kunci' => 'joss'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'][0];
    }

    public function beliHeadset()
    {
        $data = [
            'stok' => $this->input->post('stok', true) - 1,
            'id' => $this->input->post('id_headset', true),
            'beli' => 'beli',
            'kunci' => 'joss'
        ];
        $response = $this->_client->request('PUT', 'headset', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function beliHeadsetUser()
    {
        $data = [
            'harga' => $this->input->post('harga', true),
            'saldo_user' => $this->input->post('saldo_user', true),
            'id' => $this->input->post('id_user', true),
            'beli' => 'beli',
            'kunci' => 'joss'

        ];
        $response = $this->user->request('PUT', 'user', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function catatRiwayat()
    {
        $data = [
            'id_user' => $this->input->post('id_user', true),
            'nama_user' => $this->input->post('nama_user', true),
            'id_headset' => $this->input->post('id_headset', true),
            'nama_headset' => $this->input->post('nama_headset', true),
            'saldo_awal' => $this->input->post('saldo_awal', true),
            'saldo_akhir' => $this->input->post('saldo_akhir', true),
            'kunci' => 'joss'

        ];
        $response = $this->riwayat->request('POST', 'riwayat', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
}
