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

public  function catalogoBD()
{
 $data['titulo']='catalogo';
   echo view('front/head',$data);
   echo view('front/navBar');
   echo view('back/cliente/micatalogo');
  echo view('front/footer');

}
public  function catalogoc()
{
 $data['titulo']='catalogo';
   echo view('front/head',$data);
   echo view('front/navBar');
   echo view('front/catalogoc');
  echo view('front/footer');
}
public  function catalogop()
{
 $data['titulo']='catalogo';
   echo view('front/head',$data);
   echo view('front/navBar');
   echo view('front/catalogop');
  echo view('front/footer');

}
public  function catalogos()
{
 $data['titulo']='catalogo';
   echo view('front/head',$data);
   echo view('front/navBar');
   echo view('front/catalogos');
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
 $data2['info']='';
   echo view('front/head',$data);
   echo view('front/navBar');
   echo view('front/contacto',$data2);
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

public function exito()
{
$dato['titulo']='exito_de_compra'; 
echo view('front/head',$dato);
echo view('front/navBar');
echo view('back/cliente/exito');
echo view('front/footer');
}


 // cambiar a Usuario_crud_controller
 public  function ventas()
 {
  $data['titulo']='ventas';
    echo view('front/head',$data);
    echo view('front/navBar');
    echo view('back/administrador/ventas');
    echo view('front/footer');
 } 



}
