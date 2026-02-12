<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDisputesTable extends Migration
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
            'reported_by' => [
                'type' => 'INT',
                'unsigned' => true
            ],
            'description' => [
                'type' => 'TEXT'
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['open', 'investigating', 'resolved', 'closed'],
                'default' => 'open'
            ],
            'resolution_note' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'created_at' => [
                'type' => 'DATETIME'
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('disputes');
    }
    public function down()
    {
        $this->forge->dropTable('disputes');
    }
}
