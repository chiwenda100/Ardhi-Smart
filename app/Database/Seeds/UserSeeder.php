<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'full_name' => 'System Administrator',
            'email' => 'admin@aridhsmart.co.tz',
            'phone' => '0719042217',
            'national_id' => '20022110114121222202',
            'password' => password_hash('Admin@100', PASSWORD_DEFAULT),
            'role_id' => 1, // make sure role 1 exists (Admin)
            'status' => 'active',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $this->db->table('users')->insert($data);
    }
}
