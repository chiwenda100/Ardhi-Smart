<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBlockchainBlocksTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'block_hash' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'previous_hash' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'nonce' => [
                'type' => 'INT'
            ],
            'created_at' => [
                'type' => 'DATETIME'
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('blockchain_blocks');
    }
    public function down()
    {
        $this->forge->dropTable('blockchain_blocks');
    }
}
