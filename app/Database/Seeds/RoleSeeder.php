<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Admin',
                'description' => 'Administrator role with full access',
            ],
            [
                'name' => 'Officer',
                'description' => 'Officer role with limited access',
            ]
        ];

        // Using the query builder
        $this->db->table('roles')->insertBatch($data);
    }
}
