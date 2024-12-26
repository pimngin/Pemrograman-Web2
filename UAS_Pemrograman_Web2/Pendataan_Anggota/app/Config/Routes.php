<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Rute user
$routes->group('user',['filter' => 'group:user'], function($routes){
    $routes->get('anggota', 'Home::anggota');
    $routes->get('anggota', 'Home::anggota');
    $routes->post('anggota', "Home::create_anggota");
});
// Rute admin

$routes->group('admin', ['filter' => 'group:admin'], function($routes) {    
    $routes->get('admin/anggota', 'AdminController::anggota');
    $routes->post('admin/anggota', "AdminController::create_anggota");
    $routes->get('admin/anggota/(:segment)/edit', 'AdminController::edit_anggota/$1');
    $routes->post('admin/anggota/(:segment)/update', 'AdminController::update_anggota/$1');
    $routes->get('/admin/anggota/delete/(:num)', 'AdminController::delete_anggota/$1');
    $routes->post('/hapus', 'AdminController::delete_anggota');

});

service('auth')->routes($routes);
