<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->group('', function ($routes) {
    $routes->group('',['filter' => 'authGuard'], function ($routes) {
        $routes->get('dashboard', 'Welcome::dashboard');
        $routes->get('add-missing', 'Welcome::add_missing');
        $routes->post('save-missing', 'Welcome::save_missing');
        $routes->get('add-found', 'Welcome::add_found');
        $routes->post('save-found', 'Welcome::save_found');
        $routes->get('missing-list', 'Welcome::missing_list');
        $routes->get('found-list', 'Welcome::found_list');
        $routes->get('detail/missing/(:any)', 'Welcome::missing_detail/$1');
        $routes->get('detail/found/(:any)', 'Welcome::founding_detail/$1');
        $routes->get('admin-missing', 'Welcome::admin_missing');
        $routes->get('admin-found', 'Welcome::admin_found');
        $routes->get('missing/delete/(:any)', 'Welcome::delete_missing/$1');
        $routes->get('found/delete/(:any)', 'Welcome::delete_found/$1');
       
    });
    $routes->get('/', 'Welcome::index');
    $routes->get('login', 'Welcome::login');
    $routes->get('register', 'Welcome::register');
    $routes->post('save', 'Welcome::save');
    $routes->post('auth', 'Welcome::auth');
    $routes->get('logout', 'Welcome::logout');
    $routes->get('aboutus', 'Welcome::about');
    $routes->get('tandc', 'Welcome::tandc');
    $routes->get('search/(:any)/(:any)/(:any)', 'Welcome::search/$1/$2/$3');
    $routes->get('test', 'Welcome::test');

});
