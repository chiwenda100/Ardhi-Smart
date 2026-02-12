<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOwnershipsTable extends Migration
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
            'user_id' => [
                'type' => 'INT',
                'unsigned' => true
            ],
            'start_date' => [
                'type' => 'DATE'
            ],
            'end_date' => [
                'type' => 'DATE',
                'null' => true
            ],
            'is_current' => [
                'type' => 'BOOLEAN',
                'default' => true
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('ownerships');
    }
    public function down()
    {
        $this->forge->dropTable('ownerships');
    }
}
