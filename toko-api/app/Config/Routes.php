<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$base_public = 'toko-api/public/';
$routes->get($base_public, 'Home::index');
$routes->post($base_public . 'registrasi', 'RegistrasiController::registrasi');
$routes->post($base_public . 'login', 'LoginController::login');

$routes->group($base_public . 'produk', function ($routes) {
    $routes->post('/', 'ProdukController::create');
    $routes->get('/', 'ProdukController::list');
    $routes->get('(:segment)', 'ProdukController::detail/$1');
    $routes->put('(:segment)', 'ProdukController::ubah/$1');
    $routes->delete('(:segment)', 'ProdukController::hapus/$1');
});
