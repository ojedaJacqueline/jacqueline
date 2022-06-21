<?php

namespace App\Controllers;
use App\Models\VentaCabecera_model;

use CodeIgniter\Controller;

class ventasController extends Controller
{

    public  function facturacion()
	{
		$crudModel = new VentaCabecera_model();
	  

		$data['venta_data'] = $crudModel->orderBy('id', 'DESC')->paginate(100);
      

        
         $data['titulo']='facturacion';
           echo view('front/head',$data);
           echo view('front/navBar');
           echo view('back/administrador/ventas',$data);
           echo view('front/footer');
        } 
   




}