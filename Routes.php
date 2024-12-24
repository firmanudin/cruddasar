<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');
$routes->post('auth', 'Auth::auth');
$routes->get('logout', 'Auth::logout');
$routes->get('/tamu', 'Tamu::index');
$routes->get('/add', 'Tamu::add');
$routes->post('auth/proses_login', 'Auth::proses_login');
$routes->get('/edit/(:any)', 'Tamu::edit/$1');
$routes->post('/proses_edit', 'Tamu::proses_edit');
$routes->post('/proses_add', 'Tamu::proses_add');
$routes->get('/delete/(:any)', 'Tamu::delete/$1');
$routes->get('halregister', 'Auth::halregister');
$routes->post('register', 'Auth::register');
