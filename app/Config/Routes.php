<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');



if (file_exists(APPPATH . 'Config/Routes-Custom.php'))
{
	require APPPATH . 'Config/Routes-Custom.php';
}