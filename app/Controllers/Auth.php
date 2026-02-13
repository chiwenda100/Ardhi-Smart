<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    protected $data;
    protected $model;
    public function __construct(){
        $this->model = new UserModel();
    }
    public function login()
    {
        $this->data['title'] = 'Login || GeoTrust';
        return view('Auth/login', $this->data);
    }
    public function check(){

    }
}
