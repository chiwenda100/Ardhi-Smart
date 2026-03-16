<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'id',
        'full_name',
        'email',
        'phone',
        'national_id',
        'password',
        'role_id',
        'status'
    ];

    // Callbacks
    protected $beforeInsert = ['passwordHash'];
    protected $beforeUpdate = ['passwordHash'];

    // Dates
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    // Hash password
    protected function passwordHash(array $data)
    {
        if (!empty($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }
        return $data;
    }

    public function getDataForDataBase()
    {
        $db = Database::connect();
        $builder = $db->table('users');
        $builder->join('roles', 'roles.id = users.role_id', 'left outer');
        $builder->select('
            users.id AS userID,
            users.full_name,
            users.email,
            users.phone,
            users.national_id,
            users.password,
            roles.id AS rolesID,
            users.status,
            roles.name,
            roles.description
            '
        );
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function searchUser($searchWord)
    {
        $db = Database::connect();
        $builder = $db->table('users');
        $builder->join('roles', 'roles.id = users.role_id', 'left outer');
        $builder->select('
            users.id AS userID,
            users.full_name,
            users.email,
            users.phone,
            users.national_id,
            users.password,
            roles.id AS rolesID,
            users.status,
            roles.name,
            roles.description
            '
        );
        $searchWord = trim($searchWord);
        $builder->groupStart()
            ->like('users.full_name', $searchWord)
            ->orLike('users.email', $searchWord)
            ->orLike('users.phone', $searchWord)
            ->orLike('users.national_id', $searchWord)
            ->orLike('roles.name', $searchWord)
            ->groupEnd();
        $query = $builder->get();
        return $query->getResultArray();

    }
}