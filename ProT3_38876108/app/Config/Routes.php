<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/principal',  'Home::ver');
$routes->get('/quieneSomos', 'Home::quieneSomos');
$routes->get('/acercaDe', 'Home::acerca_de');
$routes->get('/login','Home::login');
$routes->get('/registrarse','Home::registrarse');

/** Rutas gestion Registro */
$routes->get('/registro', 'registrarse_controller::registrarse');
$routes->get('/register', 'registrarse_control::register');
$routes->post('/validar', 'registro_controller::validation');
$routes->match(['get','post'],'register', 'Users::register', ['filter' => 'noauth']);
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->post('/consulta', 'consulta_controller::validarmensaje');
$routes->get('prueba/consulta', 'registrarse_controller::prueba');

/*usuarios*/
$routes->post('user/change_baja/(:num)', 'login_controller::changeBaja/$1');
$routes->post('user/change_id/(:num)', 'login_controller::change_id/$1');
$routes->get('/Baja-user/(:num)', 'login_controller::delete/$1');
$routes->match(['get', 'post'], '/buscar_usuario', 'login_controller::buscar');
$routes->match(['get', 'post'],'user/editar_user/(:num)', 'login_controller::editar_user/$1');
$routes->match(['get', 'post'],'user/editar/(:num)', 'login_controller::editar/$1');
$routes->get('/usuarios', 'login_controller::usuarios');
$routes->get('/baja_usuario', 'login_controller::baja');
$routes->post('/buscar', 'login_controller::buscar');

//login 
$routes->get('/login', 'Home::login_user');
$routes->get('/raiz', 'login_controller::index');
$routes->post( '/ingresar', 'login_controller::loginAuth');
//$routes->get('/Dashboard', 'Home::dashboard',['filter' => 'authGuard']);
$routes->get('/Dashboard', 'login_controller::admin');
$routes->get('/Cerrar-Sesion', 'login_controller::logout');
//login admin
$routes->get('/administracion', 'login_controller::admin');
$routes->get('/GestionAdmin', 'login_controller::AdminDashboard');

