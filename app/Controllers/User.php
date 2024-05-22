<?php

namespace App\Controllers;

use App\Models\DetailMold;
use App\Models\UserModel;
use App\Models\FormModel;
use App\Models\MoldItemModel;

class User extends BaseController
{
    public function Form()
    {
        if (session()->get('user_nama') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('/'));
        }

        $moldItemModel = new MoldItemModel();

        // Mengambil semua item dari model
        $items = $moldItemModel->getAllItems();

        // Meneruskan data ke tampilan
        $data['items'] = $items;

        return view('pages/user/form', $data);
    }

    public function dashboard()
    {
        if (session()->get('user_nama') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('/'));
        }
        return view('pages/user/dashboard');
    }




    public function submitForm_rev()
    {
         if (session()->get('user_nama') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('/'));
        }
        
        try {
            $moldModel = new DetailMold();
            $userID = session()->get('user_id');

            // Ambil file PDF yang diunggah
            $lampiran_drawing = $this->request->getFile('drawing_produk');
            $gambar_mold = $this->request->getFile('gambar_mold');
            $gambar_part = $this->request->getFile('gambar_part');
            $gambar_runner = $this->request->getFile('gambar_runner');

            // Validasi file PDF
            if ($lampiran_drawing->isValid() && !$lampiran_drawing->hasMoved() && $lampiran_drawing->getExtension() === 'pdf') {
                // Pindahkan file PDF ke direktori yang tepat
                $drawingname = $lampiran_drawing->getRandomName();
                $lampiran_drawing->move(ROOTPATH . 'public/uploads', $drawingname);

                $gambarmold = $gambar_mold->getRandomName();
                $gambar_mold->move(ROOTPATH . 'public/uploads', $gambarmold);

                $gambarpart = $gambar_part->getRandomName();
                $gambar_part->move(ROOTPATH . 'public/uploads', $gambarpart);

                $gambarRunner = $gambar_runner->getRandomName();
                $gambar_runner->move(ROOTPATH . 'public/uploads', $gambarRunner);

                // Data untuk dimasukkan ke dalam database
                $datamold = [
                    'User_ID' => $userID,
                    'Mold_Id' => $this->request->getPost('moldIdContent'),
                    'Part_Name' => $this->request->getPost('partname'),
                    'Gambar_Mold' => $gambarmold,
                    'Deskripsi_Mold' => $this->request->getPost('deskripsi_mold'),
                    'Gambar_Part' => $gambarpart,
                    'Deskripsi_Part' => $this->request->getPost('deskripsi_part'),
                    'Gambar_Runner' => $gambarRunner,
                    'Deskripsi_Runner' => $this->request->getPost('deskripsi_runner'),
                    'Tanggal_Update' => $this->request->getPost('tanggal_update'),
                    'Posisi_Mold' => $this->request->getPost('posisi_mold'),
                    'Drawing_Produk' => $drawingname,
                    'Subject_Mold' => $this->request->getPost('subject_mold'),
                    'Subject_Tool' => $this->request->getPost('tools'),
                    'Subject_Mesin' => $this->request->getPost('mesin'),
                    'Subject_Produk' => $this->request->getPost('produk'),
                    'Subject_Proses' => $this->request->getPost('proses'),
                    'Subcount_Suplier' => $this->request->getPost('subcount'),
                    'Validasi_Ke' => $this->request->getPost('verif_ke'),
                    'LK3' => $this->request->getPost('lk3'),
                    'Spesifikasi' => $this->request->getPost('spek'),
                    'Hasil_Verifikasi' => 0
                ];

                $moldModel->insert($datamold);

                return $this->response->setJSON(['message' => 'Data submitted successfully!']);
            } else {
                // File tidak valid atau bukan file PDF
                return $this->response->setJSON(['error' => 'Invalid or non-PDF file uploaded!']);
            }
        } catch (\Exception $e) {
            // Tangkap dan cetak pesan kesalahan
            return $this->response->setJSON(['error' => 'Error: ' . $e->getMessage()]);
        }
    }


    public function getUserData()
    {
        // Periksa apakah pengguna telah login
        if (!session()->has('user_nama')) {
            // Jika pengguna belum login, arahkan ke halaman login
            session()->setFlashdata('error', 'Anda belum login');
            return redirect()->to(base_url('/'));
        }

        // Dapatkan User_ID pengguna dari sesi
        $userId = session()->get('user_id');

        // Instansiasi model UserModel
        $formModel = new DetailMold();

        // Panggil fungsi dari model untuk mendapatkan data berdasarkan User_ID
        $userData = $formModel->getDataByUserId($userId);

        // Periksa apakah data ditemukan
        if ($userData) {
            // Kembalikan data sebagai JSON
            $this->response->setContentType('application/json');
            return $this->response->setJSON($userData);
        } else {
            // Kembalikan pesan error jika data tidak ditemukan
            return $this->response->setJSON(['error' => 'Data tidak ditemukan untuk User_ID yang diberikan.']);
        }
    }
}
