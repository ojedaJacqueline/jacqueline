<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
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
/* ------------------------------------------- */
/* RUTRAS GENERALES */
//$routes->get('/', 'Home::index');
$routes->get('inicio', 'Home::index');
//$routes->get('Home/(:num)','Home::index');
//$routes->get('alias', 'controlador::funcion');
$routes->get('quienes', 'Home::quienes_somos');
$routes->get('cat', 'Home::catalogo');
$routes->get('te', 'Home::te');
$routes->get('comercial', 'Home::comercializacion');
$routes->get('contacto', 'Home::contacto');
$routes->get('terminos', 'Home::terminos_y_usos');
$routes->get('construccion', 'Home::construccion');

$routes->get('registro', 'Usuario_controller::create');
$routes->post('enviar-form', 'Usuario_controller::formValidation');

$routes->get('login', 'Home::login');
//$routes->get('login', 'Login_controller');

$routes->post('enviarlogin', 'Login_controller::auth');
$routes->get('panel', 'Panel_controller::index');
$routes->get('/salir', 'Login_controller::salir');
/* ----------------------------------------------------------- */
/*RUTAS ADMINISTRADOR */
//RUTAS USUARIO
$routes->get('inicio administrador', 'Home::inicioAdm');
$routes->get('userInactivo', 'Home::UserInactivos');
$routes->get('userActivo', 'Usuario_crud_controller::miAdmVerUsuariosActivos');
$routes->get('userMod', 'Home::UserMod');
$routes->post('edit_validation', 'Usuario_crud_controller::edit_validation');




//RUTAS PRODUCTOS
$routes->get('agregarp', 'Home::store');
$routes->get('produc', 'Producto_controller::productos');
$routes->get('modificaProd', 'Home::productosModifica');
$routes->get('prodInactivos', 'Home::productosInactivos');

//RUTAS CONSULTAS
$routes->get('consulNolog', 'Home::consultasNoLog');
$routes->get('consulLog', 'Home::consultasLog');

/* --------------------------------------------- */
/*RUTAS CLIENTE */
$routes->get('carrito', 'Carrito_controller::carrito');









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
