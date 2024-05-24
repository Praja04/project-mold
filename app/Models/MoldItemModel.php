<?php

namespace App\Models;

use CodeIgniter\Model;

class MoldItemModel extends Model
{
    protected $table            = 'mold_item';
    protected $primaryKey       = 'NO.';
    protected $allowedFields = [
        'ITEM',
        'MADE_IN',
        'STATUS',
        'Material',
        'SUPPLIER_2022',
        'SUPPLIER_2023',
        'SUPPLIER_2024',
        'TONNAGE',
        'PART',
        'RUNNER',
        'CYCLE_TIME',
        'DIMENSI_MOLD',
        'CAVITY',
        'CORE',
        'KETERANGAN'
    ];

    public function getAllItems()
    {
        return $this->findAll();
    }

    public function TotalAllItems(){
        return $this->db->table('mold_item')->countAllResults();
    }
}
