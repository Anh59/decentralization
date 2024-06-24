<?php

namespace App\Controllers\User;
use App\Models\UserModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    public function index()
    {
        return view('User/log/Login');
    }


    public function code(){
        $userModels = new UserModel();
       
    }

}
