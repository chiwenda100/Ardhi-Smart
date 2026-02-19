<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

//AUTH
$routes->get('/', 'Auth::login');
$routes->get('/auth_login', 'Auth::login');
$routes->post('/check_user', 'Auth::check');
$routes->get('/auth_logout', 'Auth::logout');

//User
$routes->get('/dashboard', 'Auth::dashboard');
$routes->get('/users', 'Users::index');