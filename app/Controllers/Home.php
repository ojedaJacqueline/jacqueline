<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index()
{
  $data['titulo']='Alessandria';
    echo view('front/head',$data);
    echo view('front/navBar');
    echo view('front/inicio');
    echo view('front/footer');

}

public  function quienes_somos()
{
 $data['titulo']='quienesSomos';
   echo view('front/head',$data);
   echo view('front/navBar');
   echo view('front/quienesSomos'); 
   echo view('front/footer');

}
public  function catalogo()
{
 $data['titulo']='catalogo';
   echo view('front/head',$data);
   echo view('front/navBar');
   echo view('front/catalogo');
  echo view('front/footer');

}
public  function te()
{
 $data['titulo']='tendencias';
   echo view('front/head',$data);
   echo view('front/navBar');
   echo view('front/tendencia');
  echo view('front/footer');

}
public  function comercializacion()
{
 $data['titulo']='comercializacion';
   echo view('front/head',$data);
   echo view('front/navBar');
   echo view('front/comercializacion');
  echo view('front/footer');

}
public  function contacto()
{
 $data['titulo']='contacto';
   echo view('front/head',$data);
   echo view('front/navBar');
   echo view('front/contacto');
  echo view('front/footer');

}

 public  function terminos_y_usos()
 {
  $data['titulo']=' terminosYusos';
    echo view('front/head',$data);
    echo view('front/navBar');
    echo view('front/terminosyusos');
    echo view('front/footer');

 }

 public  function construccion()
 {
  $data['titulo']=' en_construccion';
    echo view('front/head',$data);
    echo view('front/navBar');
    echo view('front/en_construccion');
    echo view('front/footer');

 }

 public  function login()
 {
  $data['titulo']=' login';
    echo view('front/head',$data);
    echo view('front/navBar');
    echo view('back/login');
    echo view('front/footer');

 }


/* ADMINISTRADOR */
public function inicioAdm()
{
$dato['titulo']='inicio Adm'; 
echo view('front/head',$dato);
echo view('front/navBar');
echo view('back/administrador/inicioAdm');
echo view('front/footer');
}
 public  function consultasNoLog()
 {
  $data['titulo']=' consultasNoLog';
    echo view('front/head',$data);
    echo view('front/navBar');
    echo view('back/administrador/consultasNoLog');
    echo view('front/footer');
 }

 public  function consultasLog()
 {
  $data['titulo']='consultasLog';
    echo view('front/head',$data);
    echo view('front/navBar');
    echo view('back/administrador/consultasLog');
    echo view('front/footer');
 }
  
 public  function UserInactivos()
 {
  $data['titulo']='UserInactivos';
    echo view('front/head',$data);
    echo view('front/navBar');
    echo view('back/administrador/UserInactivos');
    echo view('front/footer');
 } 

 public  function UserMod()
 {
  $data['titulo']='UserInactivos';
    echo view('front/head',$data);
    echo view('front/navBar');
    echo view('back/administrador/modificarUser');
    echo view('front/footer');
 } 

 

 public  function productosModifica()
 {
  $data['titulo']='productoLista';
    echo view('front/head',$data);
    echo view('front/navBar');
    echo view('back/administrador/modificarProd');
    echo view('front/footer');
 } 
 public  function productosInactivos()
 {
  $data['titulo']='productoLista';
    echo view('front/head',$data);
    echo view('front/navBar');
    echo view('back/administrador/productoInactivos');
    echo view('front/footer');
 }
 public  function ventas()
 {
  $data['titulo']='ventas';
    echo view('front/head',$data);
    echo view('front/navBar');
    echo view('back/administrador/ventas');
    echo view('front/footer');
 } 

 /* CLIENTE */
 public  function carrito()
 {
  $data['titulo']=' login';
    echo view('front/head',$data);
    echo view('front/navBar');
    echo view('back/cliente/miCarrito');
    echo view('front/footer');
 } 

 public  function micatalogo()
 {
  $data['titulo']=' login';
    echo view('front/head',$data);
    echo view('front/navBar');
    echo view('back/cliente/miCatalogo');
    echo view('front/footer');
 } 

}
