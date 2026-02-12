<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLandBoundariesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'land_id' => [
                'type' => 'INT',
                'unsigned' => true
            ],
            'latitude' => [
                'type' => 'DECIMAL',
                'constraint' => '10,7'
            ],
            'longitude' => [
                'type' => 'DECIMAL',
                'constraint' => '10,7'
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('land_boundaries');
    }
    public function down()
    {
        $this->forge->dropTable('land_boundaries');
    }
}
