<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('LoginController');
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

/*--------------------------
-Rutas sistema de excursion-
----------------------------
*/
//ruta inicio aplicacion
$routes->get('/', 'Excursion1Controller::index', ['as' => 'principal']);
//ruta excursion1
$routes->post('/calcular-excursion-1', 'Excursion1Controller::calcularExcursionUno', ['as' => 'calcularExcursionUno']);

//ruta excursion 2
$routes->post('/calcular-excursion-2', 'Excursion2Controller::calcularExcursionDos', ['as' => 'calcularExcursionDos']);
//ruta excursion 3
$routes->post('/calcular-excursion-3', 'Excursion3Controller::calcularExcursionTres', ['as' => 'calcularExcursionTres']);



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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
