<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MealController::index');
$routes->get('/order/(:num)', 'MealController::order/$1');

