<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDetailCells extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_detail_cell'  => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'id_cell'  => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'qr_battery' => [
                'constraint' => 255,
                'type' => 'varchar',
                'null' => true,
            ],
            'cell' => [
                'constraint' => 255,
                'type' => 'varchar',
                'null' => true,
            ],
            'check_qr' => [
                'constraint' => 255,
                'type' => 'varchar',
                'null' => true,
            ],
            'ir' => [
                'type' => 'float',
                'null' => true,
            ],
            'volt' => [
                'type' => 'float',
                'null' => true,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP'
            ]);

        // Membuat primary key
        $this->forge->addKey('id_detail_cell', true);

        // Membuat tabel detail_cells
        $this->forge->createTable('detail_cells', true);
    }

    public function down()
    {
        $this->forge->dropTable('detail_cells', true);
    }
}
