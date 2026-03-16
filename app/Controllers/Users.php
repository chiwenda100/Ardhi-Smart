<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class Users extends BaseController
{
    protected $model;
    protected $data;

    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function add()
    {
        if (request()->getMethod() == 'POST') {
            $full_name = $this->request->getPost('full_name');
            $national_number = $this->request->getPost('national_number');
            $role = $this->request->getPost('role');
            $status = $this->request->getPost('status');
            $phone = $this->request->getPost('mobile_number');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            if ($full_name == '' || $national_number == '' || $role == '' || $status == '' || $phone == '' || $email == '' || $password == '') {
                return json_encode([
                    'success' => false,
                    'message' => 'Please Field Required Field'
                ]);
            }

            $rows = [
                'full_name' => $full_name,
                'national_id' => $national_number,
                'role_id' => $role,
                'status' => $status,
                'email' => $email,
                'password' => $password,
                'phone' => $phone,
            ];

            $this->model->insert($rows);
            return json_encode([
                'success' => true,
                'message' => $full_name . "" . "Was successfully created",
            ]);

        }

    }
    public function index()
    {
        $this->data['title'] = 'Users || GeoTrust';
        return view('Admin/Users/add', $this->data);
    }

    public function fetchAllUser(){
         $information = $this->model->getDataForDataBase();
         return json_encode([
            'info' => $information, 
         ]);
    }

    public function delete($id){
        $this->model->delete($id);
        return json_encode([
            'success'=> true,
            'message'=> 'user deleted successfully',
        ]);
    }

    public function userSearch(){
        if (request()->getMethod() == 'GET') {
            $searchWord = $this->request->getGet('searchWords');
            $searchedUser = $this->model->searchUser($searchWord);
            return json_encode([
                'success'=> true,
                'searchedUser'=> $searchedUser,
            ]);
        }
    }
}
