<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\FormModel;
use App\Models\DetailMold;

class Admin extends BaseController
{

    public function index()
    {
        if (session()->get('admin_nama') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('/'));
        }
        $user = new UserModel();
        $GetUser = $user->getUser();
        $dataUser['data'] = $GetUser;
        return view('pages/admin/userlist', $dataUser);
    }

    public function manage($userId)
    {
        if (session()->get('admin_nama') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('/'));
        }
        // Membuat instance model FormModel
        $moldModel = new DetailMold();

        // Lakukan query untuk mengambil data mold berdasarkan User_ID
        $moldData = $moldModel->where('User_ID', $userId)
            ->orderBy('Tanggal_Update', 'DESC')
            ->first();

        // Jika data mold ditemukan, ambil nama pengguna (username) dari UserModel
        $username = '';
        if ($moldData) {
            // Membuat instance model UserModel
            $userModel = new UserModel();
            // Mengambil data pengguna (username) berdasarkan User_ID dari moldData
            $user = $userModel->find($moldData['User_ID']);
            // Jika data pengguna ditemukan, simpan nama pengguna
            if ($user) {
                $username = $user['username'];
            }
        }

        // Arahkan pengguna ke view admin/usermanage.php dengan menyertakan data mold dan nama pengguna sebagai parameter
        return view('pages/admin/usermanage', ['moldData' => $moldData, 'username' => $username]);
    }

    

    public function getUserMold()
    {
        
        $user = new UserModel();
        $GetUser = $user->getUser();
        $this->response->setContentType('application/json');
        return $this->response->setJSON($GetUser);
    }


    public function getMoldByUser($userId)
    {
        // Membuat instance model MoldModel
        $moldModel = new DetailMold();

        // Mengambil data mold_cbi berdasarkan User_ID dengan urutan tanggal update desc   $moldData = $moldModel->where('User_ID', $userId)->findAll();
        $moldData = $moldModel->where('User_ID', $userId)
            ->orderBy('Tanggal_Update', 'DESC')
            ->first();;

        // Mengatur jenis konten respons menjadi JSON
        $this->response->setContentType('application/json');

        // Mengembalikan data mold dalam format JSON
        return $this->response->setJSON($moldData);
    }

    public function updateHasilVerifikasi($moldID)
    {
        // Panggil model untuk melakukan update hasil verifikasi
        $moldModel = new DetailMold();
        $data = [
            'Hasil_Verifikasi' => 1 // Ubah hasil verifikasi menjadi 1 (true)
        ];
        $result = $moldModel->update($moldID, $data);
        // Buat respons JSON
        $response = array();
        if ($result) {
            $response['success'] = true;
            $response['message'] = 'Perubahan berhasil disimpan.';
        } else {
            $response['success'] = false;
            $response['message'] = 'Gagal menyimpan perubahan.';
        }

        // Kembalikan respons sebagai JSON
        return $this->response->setJSON($response);
    }
    public function updateHasilVerifikasi2($moldID)
    {
        // Panggil model untuk melakukan update hasil verifikasi
        $moldModel = new DetailMold();
        $data = [
            'Hasil_Verifikasi' => 2 // Ubah hasil verifikasi 
        ];
        $result = $moldModel->update($moldID, $data);
        // Buat respons JSON
        $response = array();
        if ($result) {
            $response['success'] = true;
            $response['message'] = 'Perubahan berhasil disimpan.';
        } else {
            $response['success'] = false;
            $response['message'] = 'Gagal menyimpan perubahan.';
        }

        // Kembalikan respons sebagai JSON
        return $this->response->setJSON($response);
    }
}
