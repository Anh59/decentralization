<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\ManageModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\IncomingRequest;
class AuthController extends BaseController
{
    public function login()
    {
        helper(['form']);
        echo view('Admin/Dashboard/Loginadmin');
    }

    public function loginAuth()
    {
        $session = session();
        $model = new ManageModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email_ad', $email)->first();
        if ($data) {
            // $pass = $data['password_ad'];
            // $verify_pass = password_verify($password, $pass);
            //if($verify_pass)

            if ($password === $data['password_ad']) {
                $ses_data = [
                    'id'         => $data['id_ad'],
                    'username'   => $data['username_ad'],
                    'email'      => $data['email_ad'],
                    'role'       => $data['role'],
                    'status'     => $data['status'],
                    'logged_in'  => TRUE
                ];
                $session->set($ses_data);
                if ($data['role'] == 'admin') {
                    return redirect()->to('Admin/Dashboard_a');
                } else {
                    return redirect()->to('Admin/Dashboard_e');
                }
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('Admin/Login');
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('Admin/Login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('Admin/Login');
    }
}
