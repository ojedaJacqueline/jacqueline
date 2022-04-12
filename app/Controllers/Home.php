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
public  function consultas()
{
 $data['titulo']='consultas';
   echo view('front/head',$data);
   echo view('front/navBar');
   echo view('front/consultas');
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

}
