<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Cells;
use App\Models\DetailCells;

date_default_timezone_set('Asia/Jakarta');

class Cell extends BaseController
{
    protected $Cells;
    protected $DetailCells;

    public function __construct()
    {
        $this->Cells = new Cells();
        $this->DetailCells = new DetailCells();
    }

    public function index()
    {
        $data['data_req_cell'] = $this->Cells->getData();

        return view('pages/checking_positioning_cell/request_cell', $data);
    }

    public function cell_detail($id)
    {
        $data['data_req_cell'] = $this->Cells->getData($id);
        $data['data_detail_req_cell'] = $this->DetailCells->getDataByIdCell($id);
        $data['data_detail_req_cell_one'] = $this->DetailCells->getOneData($id);

        return view('pages/checking_positioning_cell/detail_request_cell', $data);
    }

    public function all_cell_detail()
    {
        $data['data_all_detail_req_cell'] = $this->DetailCells->getData();

        return view('pages/checking_positioning_cell/list_detail_request_cell', $data);
    }

    public function add_req_cell()
    {
        $battery_type = $this->request->getVar('battery_type');
        $volt_battery = $this->request->getVar('volt_battery');
        $ah_battery = $this->request->getVar('ah_battery');
        $total_seri = $volt_battery / 3.2;
        $total_pararel = ceil($ah_battery / 105.0);
        $need_cell = $total_seri * $total_pararel;

        $data = [
            'battery_type' => $battery_type,
            'volt_battery' => $volt_battery,
            'ah_battery' => $ah_battery,
            'total_seri' => $total_seri,
            'total_pararel' => $total_pararel,
            'need_cell' => $need_cell,
            'limit_cell' => $need_cell,
        ];

        // Menyimpan data baru ke dalam tabel 'Cells'
        $this->Cells->save($data);

        // Mendapatkan id_cell yang baru saja disimpan
        $id_cell = $this->Cells->insertID();

        // Mendefinisikan array untuk menyimpan entri pada tabel 'DetailCells'
        $cells = [];

        // Batasan jumlah loop
        $limit = $need_cell;


        // Melakukan looping untuk membuat entri dengan nama A01 sampai D30
        for ($letter = 'A'; $letter <= 'Z'; $letter++) {
            for ($i = 1; $i <= 30 && count($cells) < $limit; $i++) {
                $cell_data = [
                    'id_cell' => $id_cell,
                    'cell'  => $letter . sprintf('%02d', $i), // Menggabungkan huruf dan nomor dengan format A01, A02, ..., D30
                ];
                // Menyimpan entri pada tabel 'DetailCells'
                $cells[] = $cell_data;
            }
        }

        // dd($cells);

        foreach ($cells as $v) {
            $this->DetailCells->save($v);
        }

        // Redirect kembali ke halaman request_cell setelah proses selesai
        return redirect()->to(base_url('request_cell'));
    }


    public function add_detail_cell($id)
    {
        $id_cell = $this->request->getVar('id_cell');
        $qr_battery = $this->request->getVar('qr_battery');
        $ir = $this->request->getVar('ir');
        $volt = $this->request->getVar('volt');
        $no_cell = $this->request->getVar('no_cell');
        $limit_cell = $this->request->getVar('limit_cell');
        $need_cell = $this->request->getVar('need_cell');

        $data = [
            'id_cell' => $id_cell,
            'no_cell' => $no_cell,
            'qr_battery' => $qr_battery,
            'ir' => $ir,
            'volt' => $volt,
        ];

        if (!empty($data)) {
            $this->DetailCells->update($id, $data);
            return json_encode($this->DetailCells->getDataByIdCell($id_cell));
        } else {
            return json_encode(['error' => 'No data provided']);
        }
    }

    public function edit_req_cell($id)
    {
        $limit_cell = intval($this->request->getVar('limit_cell')) - 1;

        $data = [
            'limit_cell' => $limit_cell,
        ];

        if (!empty($data)) {
            $this->Cells->update($id, $data);
            return json_encode($this->Cells->getData($id));
        } else {
            return json_encode(['error' => 'No data provided']);
        }
    }

    public function check_cell($id)
    {
        $check_qr = $this->request->getVar('check_qr');

        $data = [
            'check_qr' => $check_qr,
        ];

        if (!empty($data)) {
            $this->DetailCells->update($id, $data);
            return json_encode($this->DetailCells->getData($id));
        } else {
            return json_encode(['error' => 'No data provided']);
        }
    }

    public function calc_cell_positioning($id, $seri)
    {
        $id_cell = $id;
        // dd($this->DetailCells->shortDataIrMin($id_cell));
        $data = $this->DetailCells->shortDataIrMin($id_cell, $seri);

        $all_data = []; // Array untuk menyimpan semua data
        $total_ir = 0;
        foreach ($data[0] as $index => $pararel_data) {
            $pararel_array = []; // Array untuk menyimpan data ir dan volt pada setiap pararel

            foreach ($data as $pararel_key => $pararel_inner_data) {
                if (isset($pararel_inner_data[$index])) {
                    // Periksa apakah nilai ir tidak sama dengan nol sebelum melakukan pembagian
                    $countIr = $pararel_inner_data[$index]['ir'] != 0 ? 1 / $pararel_inner_data[$index]['ir'] : 0;

                    $pararel_array[] = [
                        'cell' => 'Cell ' . $pararel_inner_data[$index]['cell'],
                        'countIr' => $countIr,
                        'ir' => $pararel_inner_data[$index]['ir'],
                        'volt' => $pararel_inner_data[$index]['volt'],
                        'qr_battery' => $pararel_inner_data[$index]['qr_battery'],
                    ];
                }
            }

            // Hitung total ir dan volt
            $total_ir = array_sum(array_column($pararel_array, 'countIr'));
            $total_volt = array_sum(array_column($pararel_array, 'volt'));

            // Tambahkan total ir dan volt ke dalam array
            $pararel_array[] = [
                'cell' => '',
                'ir' => floatval(number_format($total_ir, 3)),
                'volt' => $total_volt,
                'qr_battery' => '',
                'countIr' => 0
            ];
            // $pararel_array['total_ir'] = floatval(number_format($total_ir, 3));
            // $pararel_array['total_volt'] = $total_volt;

            $all_data[] = $pararel_array; // Memasukkan array pararel_array ke dalam array all_data
        }
        // dd($all_data);
        $data['all_data'] = $all_data;
        $data['data_calc_cell'] = $this->DetailCells->shortDataIrMin($id_cell, $seri);
        return view('pages/checking_positioning_cell/cell_positioning', $data);
    }

    public function calc_cell_positioning_adm($id, $seri)
    {
        $id_cell = $id;
        // dd($this->DetailCells->shortDataIrMin($id_cell));
        $data = $this->DetailCells->shortDataIrMin($id_cell, $seri);

        $all_data = []; // Array untuk menyimpan semua data
        $total_ir = 0;
        foreach ($data[0] as $index => $pararel_data) {
            $pararel_array = []; // Array untuk menyimpan data ir dan volt pada setiap pararel

            foreach ($data as $pararel_key => $pararel_inner_data) {
                if (isset($pararel_inner_data[$index])) {
                    // Periksa apakah nilai ir tidak sama dengan nol sebelum melakukan pembagian
                    $countIr = $pararel_inner_data[$index]['ir'] != 0 ? 1 / $pararel_inner_data[$index]['ir'] : 0;

                    $pararel_array[] = [
                        'cell' => 'Cell ' . $pararel_inner_data[$index]['cell'],
                        'countIr' => $countIr,
                        'ir' => $pararel_inner_data[$index]['ir'],
                        'volt' => $pararel_inner_data[$index]['volt'],
                        'qr_battery' => $pararel_inner_data[$index]['qr_battery'],
                    ];
                }
            }

            // Hitung total ir dan volt
            $total_ir = array_sum(array_column($pararel_array, 'countIr'));
            $total_volt = array_sum(array_column($pararel_array, 'volt'));

            // Tambahkan total ir dan volt ke dalam array
            $pararel_array[] = [
                'cell' => '',
                'ir' => floatval(number_format($total_ir, 3)),
                'volt' => $total_volt,
                'qr_battery' => '',
                'countIr' => 0
            ];

            $all_data[] = $pararel_array; // Memasukkan array pararel_array ke dalam array all_data
        }
        // dd($all_data);
        $data['all_data'] = $all_data;
        $data['data_calc_cell'] = $this->DetailCells->shortDataIrMin($id_cell, $seri);
        return view('pages/checking_positioning_cell/cell_positioning', $data);
    }


    public function cell_positioning_matrix($id, $seri)
    {
        $id_cell = $id;
        // dd($this->DetailCells->shortDataIrMin($id_cell));
        $data = $this->DetailCells->shortDataIrMin($id_cell, $seri);

        $all_data = []; // Array untuk menyimpan semua data
        foreach ($data[0] as $index => $pararel_data) {
            $pararel_array = []; // Array untuk menyimpan data ir dan volt pada setiap pararel

            foreach ($data as $pararel_key => $pararel_inner_data) {
                if (isset($pararel_inner_data[$index])) {
                    $pararel_array[] = [
                        'id_detail_cell' => $pararel_inner_data[$index]['id_detail_cell'],
                        'check_qr' => $pararel_inner_data[$index]['check_qr'],
                        'cell' => 'Cell ' . $pararel_inner_data[$index]['cell'],
                        'ir' => $pararel_inner_data[$index]['ir'], // Ambil nilai ir
                        'volt' => $pararel_inner_data[$index]['volt'], // Ambil nilai volt
                        'qr_battery' => $pararel_inner_data[$index]['qr_battery'], // Ambil nilai volt
                    ];
                }
            }

            $all_data[] = $pararel_array; // Memasukkan array pararel_array ke dalam array all_data
        }
        $countArray = count($all_data);
        // dd($all_data);
        $data['all_data'] = $all_data;
        $data['countArray'] = $countArray;
        return view('pages/checking_positioning_cell/cell_positioning_matrix', $data);
    }

    public function delete_detail_req_cell($id)
    {
        $this->Cells->delete($id);

        return redirect()->to(base_url('request_cell'));
    }

    public function get_data_lithium() {
        $url = 'http://portal4.incoe.astra.co.id:8096/get_data_assy_lithium';
        $data = file_get_contents($url);
        $data = json_decode($data, true);
        return json_encode($data);
    }


}
