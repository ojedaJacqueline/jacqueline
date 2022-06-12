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
$routes->get('catac', 'Home::catalogoc');
$routes->get('catap', 'Home::catalogop');
$routes->get('catas', 'Home::catalogos');
//REGISTRO 
$routes->get('registro', 'Usuario_controller::create');
$routes->post('enviar-form', 'Usuario_controller::formValidation');
//LOGIN
$routes->get('login', 'Home::login');
//$routes->get('login', 'Login_controller');
$routes->post('enviarlogin', 'Login_controller::auth');

$routes->get('panel', 'Panel_controller::index');
$routes->get('/salir', 'Login_controller::salir');
/* ----------------------------------------------------------- */
/*RUTAS ADMINISTRADOR */
//RUTAS USUARIO
$routes->get('inicio administrador', 'Home::inicioAdm');
$routes->get('userInactivo', 'Usuario_crud_controller::UserInactivos');
$routes->get('userActivo', 'Usuario_crud_controller::miAdmVerUsuariosActivos');
/* eliminacion logica */
$routes->get('activado-usuario/(:num)', 'Usuario_crud_controller::eliminacionLogica/$1');
/* crear usuario */
$routes->get('crear-usuario', 'Usuario_crud_controller::create');
$routes->post('enviar', 'Usuario_crud_controller::formValidation');
/* editar usuario */
$routes->get('editar-usuario/(:num)', 'Usuario_crud_controller::fetch_single_data/$1');
$routes->get('add/(:num)', 'Usuario_crud_controller::add/$1');
$routes->post('edit_validation', 'Usuario_crud_controller::edit_validation');
/* consultas */
$routes->get('consultas', 'Consulta_controller::VerConsultas');
$routes->get('consultas_no_log', 'Consulta_controller::VerConsultasNOL');
//RUTAS PRODUCTOS
/* la vista de producto lista activos.. */


$routes->get('eliminar-noeliminar-producto/(:num)', 'Producto_controller::eliminacionLogica/$1');
$routes->get('produc', 'Producto_controller::productos');
$routes->get('prodInactivos', 'Producto_controller::productosInactivos');
/* editar producto */
$routes->get('editar-producto/(:num)','Producto_controller::fetch_single_data/$1');
$routes->get('vistaModifica/(:num)', 'Producto_controller::vistaModifica/$1');
$routes->post('editvalidation', 'Producto_controller::edit_validation');

/* alta producto */
$routes->get('agregarp', 'Home::store');//falta


/* --------------------------------------------- */
/*RUTAS CLIENTE */

$routes->get('cataBD', 'Home::catalogoBD');
$routes->get('carrito', 'Carrito_controller::carrito');
$routes->get('todos_los_productos', 'Carrito_controller::catalogo');
$routes->get('actualizarCarrito', 'Carrito_controller::actualizar_carrito');
$routes->get('agregarCarrito', 'Carrito_controller::add');
$routes->get('muestro', 'Carrito_controller::muestra');
$routes->get('borrar', 'Carrito_controller::borrar_carrito');









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
