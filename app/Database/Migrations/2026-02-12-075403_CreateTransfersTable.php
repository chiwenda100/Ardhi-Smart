<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTransfersTable extends Migration
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
            'seller_id' => [
                'type' => 'INT',
                'unsigned' => true
            ],
            'buyer_id' => [
                'type' => 'INT',
                'unsigned' => true
            ],
            'sale_amount' => [
                'type' => 'DECIMAL',
                'constraint' => '15,2'
            ],
            'transfer_status' => [
                'type' => 'ENUM',
                'constraint' => [
                    'pending',
                    'approved',
                    'rejected',
                    'completed'
                ],
                'default' => 'pending'
            ],
            'requested_at' => [
                'type' => 'DATETIME'
            ],
            'approved_by' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => true
            ],
            'approved_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('transfers');
    }
    public function down()
    {
        $this->forge->dropTable('transfers');
    }
}
