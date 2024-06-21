<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\ManageModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\IncomingRequest;

class DashboardController extends BaseController
{
    // public function admin()
    // {
    //     // Kiểm tra quyền admin
    //     if (session()->get('role') != 'admin') {
    //         return redirect()->to('Admin/Login');
    //     }
        
    //     return view('admin/Dashboard/Home');
    // }

    // public function employee()
    //     {
    //         // Kiểm tra quyền nhân viên
    //         if (session()->get('role') != 'employee') {
    //             return redirect()->to('Admin/login');
    //         }
            
    //         return view('admin/Dashboard/Home');
    //     }

    public function admin()
        {
            // Kiểm tra quyền admin
            if (session()->get('role') != 'admin') {
                return redirect()->to('Admin/Login');
            }
            
            $data['role'] = session()->get('role');
            return view('admin/Dashboard/Home', $data);
        }

        public function employee()
        {
            // Kiểm tra quyền nhân viên
            if (session()->get('role') != 'employee') {
                return redirect()->to('Admin/Login');
            }
            
            $data['role'] = session()->get('role');
            return view('admin/Dashboard/Home', $data);
        }
}
