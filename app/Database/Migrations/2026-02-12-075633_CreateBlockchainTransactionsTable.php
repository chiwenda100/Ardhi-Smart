<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBlockchainTransactionsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'block_id' => [
                'type' => 'INT',
                'unsigned' => true
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
            'transaction_hash' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'digital_signature' => [
                'type' => 'TEXT'
            ],
            'created_at' => [
                'type' => 'DATETIME'
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('blockchain_transactions');
    }
    public function down()
    {
        $this->forge->dropTable('blockchain_transactions');
    }
}
