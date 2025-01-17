<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->resource('lecturers');

$routes->get('lecturers', 'LecturerController::index');
$routes->get('lecturers/(:num)', 'LecturerController::show/$1');
$routes->post('lecturers', 'LecturerController::create');
$routes->put('lecturers/(:num)', 'LecturerController::update/$1');
$routes->delete('lecturers/(:num)', 'LecturerController::delete/$1');