<?php

namespace Config;

use App\Controllers\Komik;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Pages');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// --------------------------------------------------------------------

// Halaman Utama
// $routes->get('/', "Home::index");

// User
$routes->get('/', 'Pages::index');
$routes->get('/pages/about', 'Pages::about');
$routes->get('/user', 'User::index');
$routes->post('/user/save', 'User::save');
// $routes->get('/user/edit/(:segment)', 'User::edit/$1');
// $routes->post('/user/update/(:segment)', 'User::update/$1');
$routes->delete('/user/(:num)', 'User::delete/$1');

// Komik
$routes->get('/komik', 'Komik::index');
$routes->post('/komik/save', 'Komik::save');
$routes->get('/komik/create', 'Komik::create');
$routes->get('/komik/edit/(:segment)', 'Komik::edit/$1');
$routes->post('/komik/update/(:segment)', 'komik::update/$1');
$routes->delete('/komik/(:num)', 'komik::delete/$1');
$routes->get('/komik/(:any)', 'Komik::detail/$1');

// Percobaan 
$routes->get('/coba', "Coba::index");
$routes->add('/coba/test', "Coba::test");
$routes->get('/users', "Admin\Users::index");
$routes->get('/users/coba', "Admin\Users::coba");




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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
