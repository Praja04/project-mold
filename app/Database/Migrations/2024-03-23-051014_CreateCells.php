<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCells extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_cell'  => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'battery_type' => [
                'constraint' => 255,
                'type' => 'varchar',
                'null' => true,
            ],
            'volt_battery' => [
                'constraint' => 255,
                'type' => 'varchar',
                'null' => true,
            ],
            'ah_battery' => [
                'constraint' => 255,
                'type' => 'varchar',
                'null' => true,
            ],
            'total_seri' => [
                'type' => 'int',
                'null' => true,
            ],
            'total_pararel' => [
                'type' => 'int',
                'null' => true,
            ],
            'need_cell' => [
                'type' => 'int',
                'null' => true,
            ],
            'limit_cell' => [
                'type' => 'int',
                'null' => true,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP'
            ]);

        // Membuat primary key
        $this->forge->addKey('id_cell', true);

        // Membuat tabel cells
        $this->forge->createTable('cells', true);
    }

    public function down()
    {
        $this->forge->dropTable('cells', true);
    }
}
