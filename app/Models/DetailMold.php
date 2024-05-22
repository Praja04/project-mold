<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailMold extends Model
{
    protected $table = 'detail_mold';
    protected $primaryKey = 'Id';
    protected $allowedFields = ['Mold_Id', 'User_ID', 'Part_Name', 'Gambar_Mold', 'Deskripsi_Mold', 'Gambar_Part', 'Deskripsi_Part', 'Gambar_Runner', 'Deskripsi_Runner', 'Tanggal_Update', 'Posisi_Mold', 'Drawing_Produk', 'Subject_Mold', 'Subject_Tool', 'Subject_Mesin', 'Subject_Produk', 'Subject_Proses', 'Subcount_Suplier', 'Validasi_Ke', 'LK3', 'Spesifikasi', 'Hasil_Verifikasi'];
    protected $useAutoIncrement = true;
    protected $useTimestamps = false;

    // You can define validation rules here if needed
    public function getDataByUserId($userId)
    {
        return $this->where('User_ID', $userId)
            ->orderBy('Tanggal_Update', 'DESC')
            ->first();
    }

    public function getItemData()
    {
        // Membuat instance dari MoldItemModel
        $moldItemModel = new MoldItemModel();

        // Mendapatkan data ITEM dari tabel mold_item
        return $moldItemModel->findAll();
    }
}
