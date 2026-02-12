<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDocumentsTable extends Migration
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
            'uploaded_by' => [
                'type' => 'INT',
                'unsigned' => true
            ],
            'document_type' => [
                'type' => 'VARCHAR',
                'constraint' => 64
            ],
            'file_path' => [
                'type' => 'TEXT'
            ],
            'verified' => [
                'type' => 'BOOLEAN',
                'default' => false
            ],
            'uploaded_at' => [
                'type' => 'DATETIME'
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('documents');
    }
    public function down()
    {
        $this->forge->dropTable('documents');
    }
}
