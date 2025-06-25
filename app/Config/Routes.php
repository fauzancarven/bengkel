<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login'); 
$routes->post('/login/auth', 'Home::auth'); 
$routes->get('/logout', 'Home::logout'); 
$routes->get('/cekstatus', 'Pelanggan::index'); 
$routes->get('/admin/dashboard', 'admin::dashboard');

$routes->get('/admin/pelanggan', 'admin::pelanggan');
$routes->post('/admin/pelanggan/get/(:num)', 'admin::pelanggan_get/$1');
$routes->post('/admin/pelanggan/getdata', 'admin::pelanggan_table');
$routes->post('/admin/pelanggan/add', 'admin::pelanggan_add');
$routes->post('/admin/pelanggan/edit/(:num)', 'admin::pelanggan_edit/$1');
$routes->post('/admin/pelanggan/delete/(:num)', 'admin::pelanggan_delete/$1');

$routes->get('/admin/produk', 'admin::produk');
$routes->post('/admin/produk/get/(:num)', 'admin::produk_get/$1');
$routes->post('/admin/produk/getdata', 'admin::produk_table');
$routes->post('/admin/produk/add', 'admin::produk_add');
$routes->post('/admin/produk/edit/(:num)', 'admin::produk_edit/$1');
$routes->post('/admin/produk/delete/(:num)', 'admin::produk_delete/$1');

$routes->get('/admin/service', 'admin::service');


