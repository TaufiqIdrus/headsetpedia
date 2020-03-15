<?php

use GuzzleHttp\Client;

class Login_model extends CI_model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/server_user/api/user',
            'auth' => ['admin', '1234']
        ]);
    }

    public function login($id,$password)
    {
        $response = $this->_client->request('GET', 'user', [
            'query' => [
                'id' => $id,
                'password' => $password
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'][0];
    }
}
