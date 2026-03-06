<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RoleModel;
use CodeIgniter\HTTP\ResponseInterface;

class Roles extends BaseController
{
    protected $model;
    protected $data;

    public function __construct(){
        $this->model = new RoleModel();

    }
    public function fetchData()
    {
        if($roles = $this->model->findAll()){
            return json_encode([
                'roles' => $roles
            ]);
        }
    }
}
