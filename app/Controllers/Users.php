<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class Users extends BaseController
{
    protected $model;
    protected $data;

    public function __construct(){
        $this->model = new UserModel();
    }

    public function add(){

    }
    public function index()
    {
        $this->data['title'] = 'Users || GeoTrust';
        return view('Admin/Users/add', $this->data);
    }
}
