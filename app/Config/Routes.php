<?php

namespace Config;
use App\Controllers\Warga;
use App\Controllers\User;
use App\Controllers\Bantuan;
use App\Controllers\Bantuan_Warga;
use App\Controllers\Transaksi_Keluar;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::home');
$routes->get('/login', 'Home::index');
$routes->get('/register', 'Home::register');
$routes->get('/dashboard', 'Home::dashboard');

$routes->get('/warga/index', 'Warga::warga_index');
$routes->get('/warga/create', 'Warga::warga_create');
$routes->post('/warga/store', 'warga::warga_store');
$routes->post('/warga/update_save', 'warga::update_save');
$routes->get('/warga/detail/(:num)', [warga::class, 'warga_detail']);
$routes->get('/warga/delete/(:num)', [warga::class, 'warga_delete']);
$routes->get('/warga/update/(:num)', [warga::class, 'warga_update']);

$routes->get('/bantuan/index', 'bantuan::bantuan_index');
$routes->get('/bantuan/create', 'bantuan::bantuan_create');
$routes->post('/bantuan/store', 'bantuan::bantuan_store');
$routes->post('/bantuan/update_save', 'bantuan::update_save');
$routes->get('/bantuan/delete/(:num)', [bantuan::class, 'bantuan_delete']);
$routes->get('/bantuan/update/(:num)', [bantuan::class, 'bantuan_update']);

$routes->get('/bantuan_warga/index', 'bantuan_warga::bantuan_index');
$routes->get('/bantuan_warga/create', 'bantuan_warga::bantuan_create');
$routes->post('/bantuan_warga/store', 'bantuan_warga::bantuan_store');
$routes->get('/bantuan_warga/delete/(:num)', [bantuan_warga::class, 'bantuan_delete']);
$routes->get('/bantuan_warga/update_diterima/(:num)', [bantuan_warga::class, 'bantuan_diterima']);
$routes->get('/bantuan_warga/update_ditolak/(:num)', [bantuan_warga::class, 'bantuan_ditolak']);

$routes->get('/user/index', 'User::user_index');
$routes->get('/user/create', 'User::user_create');
$routes->post('/user/store', 'User::user_store');
$routes->post('/user/update_save', 'User::update_save');
$routes->get('/user/delete/(:num)', [User::class, 'user_delete']);
$routes->get('/user/update/(:num)', [User::class, 'user_update']);

$routes->post('/login', 'Home::login');
$routes->get('/logout', 'Home::logout');
$routes->post('/create_akun', 'Home::create_akun');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}