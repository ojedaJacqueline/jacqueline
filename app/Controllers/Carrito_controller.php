<?php 
namespace App\Controllers;
  
use CodeIgniter\Controller;

class Carrito_controller extends Controller {

    public function carrito() {
  
  $data['titulo']='MiCarrito';
   echo view('front/head',$data);
   echo view('front/navBar');
   echo view('back/cliente/MiCarrito'); 
   echo view('front/footer');



    }




     
}