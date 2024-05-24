<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->get('/', 'Login::index');

// //LOGIN
// $routes->get('/login', 'Login::index');
// $routes->post('/login/proses_login', 'Login::proses_login');
// $routes->get('/logout', 'Login::logout');

// // // REQUEST CELL
// // $routes->group("request_cell", ["filter" => "auth"], function($routes){
// //     $routes->get('/', 'Cell::index');
// //     $routes->get('all_cell_detail', 'Cell::all_cell_detail');
// //     $routes->get('cell_detail/(:any)', 'Cell::cell_detail/$1');
// //     $routes->get('list_data_cell/(:any)/(:any)', 'Cell::calc_cell_positioning/$1/$2');
// //     $routes->get('list_data_cell_adm/(:any)/(:any)', 'Cell::calc_cell_positioning_adm/$1/$2');
// //     $routes->get('cell_positioning_matrix/(:any)/(:any)', 'Cell::cell_positioning_matrix/$1/$2');
// //     $routes->get('delete_cell/(:any)', 'Cell::delete_detail_req_cell/$1');
// //     $routes->post('add_req_cell', 'Cell::add_req_cell');
// //     $routes->post('add_detail_cell/(:any)', 'Cell::add_detail_cell/$1');
// //     $routes->post('edit_req_cell/(:any)', 'Cell::edit_req_cell/$1');
// //     $routes->post('check_cell/(:any)', 'Cell::check_cell/$1');
// // });

// // get data
// $routes->get('/get_data_lithium', 'Cell::get_data_lithium');


 //admin
$routes->get('admin', 'Admin::index');
$routes->get('dashboard-admin', 'Admin::index2');
$routes->get('manage/(:num)', 'Admin::manage/$1');
$routes->get('usermold', 'Admin::getUserMold');
$routes->get('admin/mold_by_user/(:num)', 'Admin::getMoldByUser/$1');
$routes->post('/admin/updateHasilVerifikasi/(:num)', 'Admin::updateHasilVerifikasi/$1');
$routes->post('/admin/updateHasilVerifikasi2/(:num)', 'Admin::updateHasilVerifikasi2/$1');


//user
$routes->get('form', 'User::Form');
$routes->get('dashboard', 'User::dashboard');
$routes->get('user/getData', 'User::getUserData');
$routes->post('submit', 'User::submitForm');
$routes->post('submit2', 'User::submitForm_rev');

//Auth
$routes->get('/', 'Auth::index');
$routes->post('login', 'Auth::login');
$routes->get('register', 'Auth::register');
$routes->post('register', 'Auth::register_action'); 
$routes->get('logout', 'Auth::logout'); 
//$routes->post('submit-form', 'FormController::submitForm');





