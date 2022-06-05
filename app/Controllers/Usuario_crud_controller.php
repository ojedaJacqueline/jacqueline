<?php
namespace App\Controllers;
Use App\Models\Usuarios_model;
use CodeIgniter\Controller;
class Usuario_crud_controller extends Controller{

    public  function miAdmVerUsuariosActivos()
    {
        if((session('logged_in'))and ((session()->get('perfil_id'))==1)){
        
            $lista_usuarios = new Usuarios_model();
            $dato = $lista_usuarios->get_user();
         
            $usuarios = [ 'datos' => $dato];

    $dato['titulo'] = 'Usuarios';
    echo view('front/head',$dato);
    echo view('front/navbar');
    echo view('back/administrador/miAdmVerUsuariosActivos',$usuarios);
    echo view('front/footer');

        } 
        else {
            $dato['titulo'] = 'login';
            echo view('front/head',$dato);
            echo view('front/navbar');
            echo view('back/cliente/login');
            echo view('font/footer');
        }

        }
    }