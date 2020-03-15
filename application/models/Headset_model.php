<?php

use GuzzleHttp\Client;

class Headset_model extends CI_model
{

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/server_headset/api/headset',
            'auth' => ['admin', '1234']
        ]);
    }



    public function getAllHeadset()
    {
        $response = $this->_client->request('GET', 'headset', [
            'query' => [
                'kunci' => 'joss'
            ]

        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function tambahDataHeadset()
    {
        $data = [
            'id_headset' => $this->input->post('id_headset', true),
            'nama_headset' => $this->input->post('nama_headset', true),
            'gambar' => $this->input->post('gambar', true),
            'harga' => $this->input->post('harga', true),
            'stok' => $this->input->post('stok', true),
            'kunci' => 'joss'

        ];

        $response = $this->_client->request('POST', 'headset', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function hapusDataHeadset($id)
    {
        $response = $this->_client->request('DELETE', 'headset', [
            'form_params' => [
                'id'  => $id,
                'kunci' => 'joss'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
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

    public function ubahDataHeadset()
    {
        $data = [
            'id_headset' => $this->input->post('id_headset', true),
            'nama_headset' => $this->input->post('nama_headset', true),
            'gambar' => $this->input->post('gambar', true),
            'harga' => $this->input->post('harga', true),
            'stok' => $this->input->post('stok', true),
            'id' => $this->input->post('id_headset', true),
            'kunci' => 'joss'
        ];

        $response = $this->_client->request('PUT', 'headset', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function beliHeadset()
    {

        $data = [
            'stok' => $this->input->post('stok', true),
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

    public function cariDataHeadset()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('nim', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('tb_mhs')->result_array();
    }
}
