<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/productos', 'Productos::index');
$routes->get('/producto/(:num)', 'Productos::show/$1');
$routes->get('/producto/(:alpha)/(:num)', 'Productos::cat/$1/$2');

$routes->get('/verDetalle/(:num)', 'Productos::verDetalle/$1');


if(is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
