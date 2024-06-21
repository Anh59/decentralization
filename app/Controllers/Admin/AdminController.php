<?php 
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\IncomingRequest;

class AdminController extends BaseController{
    protected $data; // Biến để chứa dữ liệu chung

    public function __construct()
    {
        $this->data['role'] = session()->get('role');
    }

    public function home()
    {
        $this->data['pageTitle'] = 'Home';
        return view('admin/Dashboard/Home', $this->data);
    }

    public function profile()
    {
        $this->data['pageTitle'] = 'Profile';
        return view('admin/Dashboard/Profile', $this->data);
    }

    public function card()
    {
        $this->data['pageTitle'] = 'Card';
        return view('admin/Dashboard/Card', $this->data);
    }

    public function account()
    {
        $this->data['pageTitle'] = 'Account';
        return view('admin/Dashboard/Account', $this->data);
    }
   
   

    //xử lý phân quyền 
    public function SignTest(){
       
        
        
    }



}
