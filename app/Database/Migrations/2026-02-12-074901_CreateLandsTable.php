<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLandsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'land_number' => [
                'type' => 'VARCHAR',
                'constraint' => 64
            ],
            'title_number' => [
                'type' => 'VARCHAR',
                'constraint' => 64
            ],
            'region' => [
                'type' => 'VARCHAR',
                'constraint' => 64
            ],
            'district' => [
                'type' => 'VARCHAR',
                'constraint' => 64
            ],
            'ward' => [
                'type' => 'VARCHAR',
                'constraint' => 64
            ],
            'village' => [
                'type' => 'VARCHAR',
                'constraint' => 64
            ],
            'size' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2'
            ],
            'land_use' => [
                'type' => 'VARCHAR',
                'constraint' => 64
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => [
                    'active',
                    'under_transfer',
                    'disputed',
                    'blocked'
                ],
                'default' => 'active'
            ],
            'created_by' => [
                'type' => 'INT',
                'unsigned' => true
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('lands');
    }
    public function down()
    {
        $this->forge->dropTable('lands');
    }
}
