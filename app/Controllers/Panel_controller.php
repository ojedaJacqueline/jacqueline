<?php 
namespace App\Controllers;
  
use CodeIgniter\Controller;
  
class Panel_controller extends Controller
{
    public function index()
    {
        $session = session();
        $nombre=$session->get('usuario');
        
         $dato['titulo']='Bienvenido'; 
        echo view('front/head',$dato);
        echo view('front/navBar');
        echo view('back/administrador/inicioAdm');
        echo view('front/footer');
     
    }
}