<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/test', 'Home::test');
$routes->get('/view_all', 'Home::view_all');
$routes->get('/contact', 'Home::contact');
$routes->get('/getPosts', 'Home::getPosts');
$routes->get('/view_this/(:any)', 'Home::view_this/$1');
$routes->get('/sendMessage', 'Home::sendMessage');
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/home', 'Admin::home');
$routes->get('/admin/posts', 'Admin::posts');
$routes->get('/admin/requests', 'Admin::requests');
$routes->get('/admin/password', 'Admin::password');
$routes->get('/admin/upload', 'Admin::upload');
$routes->get('/admin/changeReadStatus/(:any)', 'Admin::changeReadStatus/$1');
$routes->get('/admin/view_request/(:any)', 'Admin::view_request/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
