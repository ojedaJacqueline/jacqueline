<?php
namespace App\Controllers;
Use App\Models\Producto_Model;
use CodeIgniter\Controller;

class Producto_controller extends Controller {
/*-------------Muestra la lista de usuarios de la BD------------*/  
    public  function productos()
	{
		$crudModel = new Producto_Model();

		$data['prod_data'] = $crudModel->orderBy('id', 'DESC')->paginate(10);

        
         $data['titulo']='productos';
           echo view('front/head',$data);
           echo view('front/navBar');
           echo view('back/administrador/productoLista',$data);
           echo view('front/footer');
        } 
/* -------------------//FIN// Muestra la lista de usuarios de la BD------------------ */        
/*----------------EDITAR PRODUCTO-------------- */    	
   

public   function add()//vista 
	{
        $dato['titulo'] = 'Editar';
        echo view('front/head',$dato);
        echo view('front/navbar');
        echo view('back/administrador/modificarProd');
        echo view('front/footer');

	}
public 	function add_validation()
	{
		helper(['form', 'url']);//primero tenemos que cargar la clase auxiliar requerida
        
        $error = $this->validate([
            'categoria_id'=>'requered|min_length[2]',
            'nombreProd'=>'requered|min_length[2]',
            'imagen'=> 'required',
            'stock'=>'required',
            'stock_min'=>'required',
            'precio'=>'required',
            'precio_venta'=>'required',
            
            
        ]);//validar los datos del formulario

        

        if(!$error)
        {
            $dato['titulo'] = 'Editar';
            echo view('front/head',$dato);
            echo view('front/navbar');
            echo view('back/administrador/modificarProd',[
                'error' => $this->validator
            ]);
            echo view('front/footer');
        } 
        else 
        {
            $prodModel = new Producto_Model();
            
            $prodModel->save([
                'categoria_id'   => $this->request->getVar('categoria_id'),
                'nombreProd'  => $this->request->getVar('nombreProd'),
                'imagen'=> $this->request->getVar('imagen'),
                'stock'  => $this->request->getVar('stock'),
                'stock_min'  => $this->request->getVar('stock_min'),
                'precio'  => $this->request->getVar('precio'),
                'precio_venta'  => $this->request->getVar('precio_venta'),
            ]);//si pasa las reglas de validacion,se carga con la funcion save los datos a la tabla mysql         
            
            $session = \Config\Services::session();

            $session->setFlashdata('success', 'User Data Added');//mostrar el mensaje de éxito

            return $this->response->redirect(site_url('/produc'));
        }

	}



	// obtener datos de un solo producto de Mysql 
    public  function fetch_single_data($id = null)
    {
        $prodModel = new Producto_Model();
        $data['prod_data'] = $prodModel->where('id', $id)->first();
        
        $dato['titulo'] = 'Editar';
            echo view('front/head',$dato);
            echo view('front/navbar');
            echo view('back/administrador/modificarProd',$data);
            echo view('front/footer');

    }

//recibio una solicitud de formulario de datos de actualización
    public  function edit_validation()
    {
    	helper(['form', 'url']);
        
        $error = $this->validate([
            'categoria_id'=>'requered|min_length[2]',
            'nombreProd'=>'requered|min_length[2]',
            'imagen'=> 'required',
            'stock'=>'required',
            'stock_min'=>'required',
            'precio'=>'required',
            'precio_venta'=>'required',
        ]);//validado los datos del formulario 

        $prodModel = new Producto_Model();

        $id = $this->request->getVar('id');

        if(!$error)
        {
        	$data['prod_data'] = $prodModel->where('id', $id)->first();
        	$data['error'] = $this->validator;

        $dato['titulo'] = 'Editar';
             echo view('front/head',$dato);
             echo view('front/navbar');
             echo view('back/administrador/modificarProd',$data);
             echo view('front/footer');
        } 
        else 
        {
	        $data = [
                'categoria_id'   => $this->request->getVar('categoria_id'),
                'nombreProd'  => $this->request->getVar('nombreProd'),
                'imagen'      =>$this->$file->getName(),//obtener el nombre de la img
                'stock'  => $this->request->getVar('stock'),
                'stock_min'  => $this->request->getVar('stock_min'),
                'precio'  => $this->request->getVar('precio'),
                'precio_venta'  => $this->request->getVar('precio_venta'),
	        ];

        	$prodModel->update($id, $data); //ha actualizado los datos de la tabla mysql

        	$session = \Config\Services::session();

            $session->setFlashdata('success', 'User Data Updated');

        	return $this->response->redirect(site_url('/produc'));
        }

    }
/*--------------------------- //FIN// EDITAR PRODUCTO ---------*/
/*--------------------------- //ALTA PRODUCTO ---------*/
public function store(){
    $input = $this->validate([
         'nombreProd'=>'requered|min_length[2]',
         'categoria'=>'is_not_unique[categoria.id]',
         'imagen'=>'uploaded[imagen]|[imagen,4096]|is_image[imagen]',
         'precio'=>'required',
         'precio_venta'=>'required',
         'stock'=>'required',
         'stock_min'=>'required',
    ]);
 $productomodel= new Producto_Model();

 if(!$input){
     $dato['titulo']='Alta';
     echo view('front/head',$dato);
     echo view('front/navBar');
     echo view('front/administrador/productoLista',[
         'validation'=> $this->validator
     ]);
     echo view('front/footer');
 } else{
     $file= $this->request->getFile('imagen');
     $nombre_aleatorio = $file->getRandomName();
     $file->move(ROOTPATH.'public/assets/uploads',$nombre_aleatorio);

     $data = [
             'nombre_prod' => $this->request->getVar('nombreProd'),
             'imagen'=>$file->getName(),//obtener el nombre de la img
             'categoria_id' => $this->request->getVar('categoria'),
             'precio'=>$this->request->getVar('precio'),
             'precio_vta'=> $this->request->getVar('precio_venta'),
             'stock'=> $this->request->getVar('stock'),
             'stock_min'=> $this->request->getVar('stock_min'),


     ];

     $producto = new Producto_Model();
     $producto->insert($data); //inserta a la tabla de la bd

     return $this->response->redirect(site_url('crear'));

 }

 } 
/*--------------------------- //FIN// ALTA PRODUCTO ---------*/


/*---- //FIN//ELIMINACION LOGICA---- */
public function eliminacionLogica($id = null)
    {
        $prodModel = new Producto_Model();
        $data = $prodModel->where('id', $id)->first();
        if ($data['eliminado'] == 'NO') {

            $data1 = [
                'eliminado' => 'SI'
            ];

            $prodModel->update($id, $data1); //ha actualizado los datos de la tabla mysql
            $session = \Config\Services::session();

            $session->setFlashdata('success', 'User Data Updated');

            return $this->response->redirect(site_url('/produc'));
        } else {
            $data1 = [
                'eliminado' => 'NO'
            ];

            $prodModel->update($id, $data1); //ha actualizado los datos de la tabla mysql
            $session = \Config\Services::session();

            $session->setFlashdata('success', 'User Data Updated');

            return $this->response->redirect(site_url('/produc'));
        }
    }
    /*---- //FIN//ELIMINACION LOGICA---- */
}






