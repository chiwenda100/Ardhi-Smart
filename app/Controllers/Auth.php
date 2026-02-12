<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    protected $data;
    public function login()
    {
        $this->data['title'] = 'Login ||ArdhiSmart';
        return view('Auth/login', $this->data);
    }
}
