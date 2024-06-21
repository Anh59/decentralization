<?php

namespace App\Controllers\Admin;
use App\Models\ManageModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AccountController extends BaseController
{
    // protected $data;
    // public function __construct()
    // {
    //     $this->data['role'] = session()->get('role');
    // }

    public function Account_table(){
        $data['pageTitle']='Account_table'; 
        $data['role'] = session()->get('role');
        $manageModel = new ManageModel();
        $data['manage']= $manageModel->findAll();
        
        return view('admin/Dashboard/Account/Table',$data);
    }

    public function Account_create(){
        $data['manage']=new ManageModel();
        $data['pageTitle']='Account_add';  
        $data['role']=session()->get('role');
        return view('admin/Dashboard/Account/add',$data); 
    }
    public function Account_store(){
       
        
        $request = service('request');

        $manageModel = new ManageModel();
        $data = [
            'username_ad' => $request->getPost('username_ad'),
            'email_ad' => $request->getPost('email_ad'),
            'password_ad' => $request->getPost('password_ad'),
            'role' => $request->getPost('role'),
            //'password' => password_hash($request->getPost('password'), PASSWORD_DEFAULT), // Băm mật khẩu
            // Lưu các trường khác tùy ý
        ];
        
        $manageModel->insert($data);
        return redirect()->to(site_url('Admin/Account_internal'))->with('success', 'Account added successfully.');
        
    }

    public function ap(){
        $request = service('request');
        $manageModel= new ManageModel();
        $data=[
            'username'=>$request->getPost('username'),
            'email'=>$request->getpost('email'),
            'password'=>$request->getPost('password'),
            'role'=>$request->getPost('role'),

        ];
        $manageModel->insert($data);
        return redirect()->to(site_url('Admin/Account_internal'))->with('success','Account added successfully');
        
    }


    public function Account_delete($id_ad){
        $manageModel = new ManageModel();
        $manageModel->delete($id_ad);
    
        //return redirect()->to(site_url('admin/Dashboard/Account/Table')); // Chuyển hướng sau khi xóa thành công
        return redirect()->to(site_url('Admin/Account_internal'));

    }

    public function Account_edit($id_ad){

        $data['pageTitle']='Account_edit'; 
        $data['role'] = session()->get('role');
        return view('Admin/Dashboard/Account/edit', $data);


        
    }

    public function Account_update($id_ad){

    }   



    
}
