<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login','Home::login');
$routes->post('verify_login','Home::verify_login');
$routes->get('/', 'Home::index');
$routes->get('/show', 'Home::show');
$routes->post('/insert', 'Home::insert');
$routes->get('/edit/(:num)', 'Home::edit/$1');
$routes->get('/delete/(:num)', 'Home::delete/$1');
$routes->post('/update', 'Home::update');


