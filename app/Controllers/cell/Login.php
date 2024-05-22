<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Users;

class Login extends BaseController
{
    protected $users;
    protected $session;
    protected $client;
    public function __construct()
    {
        $this->users = new Users();
        $this->session = \Config\Services::session();
        $this->client = \Config\Services::curlrequest();
    }
    public function index()
    {
        return view('login');
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(base_url('login'));
    }

    public function proses_login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Mode login melalui API
        $response = $this->client->request('POST', 'https://portal3.incoe.astra.co.id/production_control_v2/public/api/login', [
            'form_params' => [
                'username' => $username,
                'password' => $password
            ]
        ]);

        $status = $response->getStatusCode();
        $body = $response->getBody();

        if ($status == 200) {
            $data = json_decode($body, true);

            if (!empty($data)) {
                $session_data = [
                    'username' => $data['username'],
                    'nama' => $data['nama'],
                    'npk' => $data['npk'],
                    'id_divisi' => $data['id_divisi'],
                    'divisi' => $data['divisi'],
                    'id_departement' => $data['id_departement'],
                    'departement' => $data['departement'],
                    'id_section' => $data['id_section'],
                    'section' => $data['section'],
                    'id_sub_section' => $data['id_sub_section'],
                    'sub_section' => $data['sub_section'],
                    'kode_jabatan' => $data['kode_jabatan'],
                    'is_login' => true
                ];
                $this->session->set($session_data);

                    return redirect()->to(base_url('request_cell'));
            } else {
                // Jika respons kosong, lakukan pengecekan login dari model lokal
                $data = $this->users->cek_login($username, $password);

                if (!empty($data)) {
                    $session_data = [
                        'username' => $data['username'],
                        'nama' => $data['nama'],
                        'npk' => $data['npk'],
                        'id_divisi' => $data['id_divisi'],
                        'divisi' => $data['divisi'],
                        'id_departement' => $data['id_departement'],
                        'departement' => $data['departement'],
                        'id_section' => $data['id_section'],
                        'section' => $data['section'],
                        'id_sub_section' => $data['id_sub_section'],
                        'sub_section' => $data['sub_section'],
                        'kode_jabatan' => $data['kode_jabatan'],
                        'is_login' => true
                    ];
                    $this->session->set($session_data);

                        return redirect()->to(base_url('request_cell'));
                }
            }
        } else {
            // Respons tidak berhasil, tampilkan pesan kesalahan atau lakukan tindakan yang sesuai
        }
    }


}
