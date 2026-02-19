<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    protected $data;
    protected $model;
    public function __construct()
    {
        $this->model = new UserModel();
    }
    public function login()
    {
        $this->data['title'] = 'Login || GeoTrust';
        return view('Auth/login', $this->data);
    }
    public function check()
    {
        if ($this->request->getMethod() === 'POST') {

            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $user = $this->model
                ->where('email', $email)
                ->first();

            if (!$user || !password_verify($password, $user['password'])) {
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'Invalid Cridientals'
                ]);
            }
            $data = [
                'user_id' => $user['id'],
                'email' => $user['email'],
                'logged_in' => true
            ];

            session()->set($data);

            return $this->response->setJSON([
                'success' => true,
                'message' => 'Login successful'
            ]);
        }
    }

    public function dashboard(){
        $this->data['title'] = 'Dashboard || GeoTrust';
        return view('Admin_panel/home', $this->data);
    }

    public function logout(){
        session()->destroy();
        $this->data['title'] = 'Login || GeoTrust';
        return view('Auth/login', $this->data);
    }
}
