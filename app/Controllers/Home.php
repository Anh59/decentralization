<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function home(): string
    {
        $data['pageTitle']='Home';
        return view('admin/Dashboard/Home',$data);
    }
    public function index(): string
    {
      return view('welcome_message');
    }

    
}
