<?php

namespace App\Controllers\Admin;

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\ManageModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\IncomingRequest;

class ProfileController extends BaseController
{
    public function index()
    {    
        $session = session(); // Lấy session hiện tại
      
        // Kiểm tra xem người dùng đã đăng nhập hay chưa
        // if (!$session->has('user_id')) {
        //     throw new \Exception('User not logged in');
        // }

        $user_id = $session->get('user_id'); // Lấy user_id từ session

        $model = new ManageModel();
        $profile = $model->find($user_id); // Tìm profile với user_id tương ứng

        if (!$profile) {
            throw new \Exception('Profile not found');
        }

        $data['profile'] = $profile;
        $data['role'] = session()->get('role');
        // Chuyển dữ liệu sang view 'admin/profile_view'
        return view('Admin/Dashboard/Profile', $data); 
    }
}
