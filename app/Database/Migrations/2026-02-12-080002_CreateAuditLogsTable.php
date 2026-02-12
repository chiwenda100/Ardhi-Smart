<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAuditLogsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'user_id' => [
                'type' => 'INT',
                'unsigned' => true
            ],
            'action' => [
                'type' => 'VARCHAR',
                'constraint' => 128
            ],
            'table_name' => [
                'type' => 'VARCHAR',
                'constraint' => 64
            ],
            'record_id' => [
                'type' => 'INT'
            ],
            'timestamp' => [
                'type' => 'DATETIME'
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('audit_logs');
    }
    public function down()
    {
        $this->forge->dropTable('audit_logs');
    }
}
