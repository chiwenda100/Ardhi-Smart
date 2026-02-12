<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

//AUTH
$routes->get('/', 'Auth::login');
$routes->get('/auth_login', 'Auth::login');
