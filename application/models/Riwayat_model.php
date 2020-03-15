<?php

use GuzzleHttp\Client;

class Riwayat_model extends CI_model
{
 
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/server_user/api/riwayat',
            'auth' => ['admin', '1234']
        ]);
    }



    public function getAllRiwayat()
    {
        $response = $this->_client->request('GET', 'riwayat', [
            'query' => [
                'kunci' => 'joss']
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function getRiwayatById($id)
    {
        $response = $this->_client->request('GET', 'riwayat', [
            'query' => [
                'id' => $id,
                'kunci' => 'joss'
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'][0];
    }

    public function cariDataRiwayat()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('nim', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('tb_mhs')->result_array();
    }
}
