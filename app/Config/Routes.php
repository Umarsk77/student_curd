<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Student::index');





$routes->get('/student', 'Student::index');
$routes->get('/student/create', 'Student::create');
$routes->post('/student/create', 'Student::create');
$routes->get('/student/edit/(:num)', 'Student::edit/$1');
$routes->post('/student/edit/(:num)', 'Student::edit/$1');
$routes->get('/student/delete/(:num)', 'Student::delete/$1');
$routes->get('/student/read/(:num)', 'Student::read/$1');