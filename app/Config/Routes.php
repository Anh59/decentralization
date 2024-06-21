<?php

use CodeIgniter\Router\RouteCollection;


/** 
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->group("Admin",function($routes){
    //Nav xử lý các nhánh từng phần 

    $routes->get('Home',"Admin\AdminController::Home",['as' => 'Admin.Home']);//as là để gọi đến thay vì gọi trực tiếp trong href => dễ xử lý tuyến hơn 
    $routes->get("Profile","Admin\AdminController::Profile" ,['as' => 'Admin.Profile']);
    $routes->get("Card","Admin\AdminController::Card" ,['as' => 'Admin.Card']);
    // $routes->get("Account","Admin\AdminController::Account" ,['as' => 'Admin.Account']);//trùng với Account_internal
    $routes->get('LoginAdmin','',['as'=> '']);

    //phân quyền truy cập

    $routes->get('Login', 'Admin\AuthController::login');
    $routes->post('LoginAuth', 'Admin\AuthController::loginAuth');
    $routes->get('Logout', 'Admin\AuthController::logout');
    $routes->get('Dashboard_a', 'Admin\DashboardController::admin');
    $routes->get('Dashboard_e', 'Admin\DashboardController::employee');
    
    
    //quản lý tài khoản Account
    $routes->get('Account_internal','Admin\AccountController::Account_table',['as' => 'Account_internal']);
    //add
    $routes->get('Account_internal_add','Admin\AccountController::Account_create');
    $routes->post('Account_internal_add','Admin\AccountController::Account_store');

    //delete
    $routes->delete('Account_internal_delete/(:num)', 'Admin\AccountController::Account_delete/$1');
    //update

    $routes->get('Account_internal_edit/(:num)', 'Admin\AccountController::Account_edit/$1');
    // //database
   

    
    
});









