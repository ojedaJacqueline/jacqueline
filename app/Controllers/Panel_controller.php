<?php 
namespace App\Controllers;
  
use CodeIgniter\Controller;
  
class Panel_controller extends Controller
{
    public function index()
    {
        $session = session();
        $nombre=$session->get('usuario');
        
         $dato['titulo']='panel del usuario'; 
        echo view('front/head',$dato);
        echo view('front/navBar');
        echo "Bienvenido: ".$nombre;
        echo view('front/footer');
     
    }
}