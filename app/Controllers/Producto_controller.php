<?php
namespace App\Controllers;
Use App\Models\Producto_Model;
Use App\Models\Categoria_model;

use CodeIgniter\Controller;

class Producto_controller extends Controller {
/*-------------Muestra la lista de usuarios de la BD------------*/  
/*-----VISTA PRODUCTOS ACTIVOS ----*/
    public  function productos()
	{
		$crudModel = new Producto_Model();
		$crudModel1 = new Categoria_model();

		$data['prod_data'] = $crudModel->orderBy('id', 'DESC')->paginate(100);
		$data['descripcion'] = $crudModel1->orderBy('id', 'DESC')->paginate(100);

        
         $data['titulo']='productos';
           echo view('front/head',$data);
           echo view('front/navBar');
           echo view('back/administrador/productoLista',$data);
           echo view('front/footer');
        } 
/* -------------------//FIN// Muestra la lista de usuarios de la BD------------------ */
/*-----VISTA PRODUCTOS INACTIVOS ----*/
public  function productosInactivos()
{
    $crudModel = new Producto_Model();
    $crudModel1 = new Categoria_model();
    
	$data['prod_data'] = $crudModel->orderBy('id', 'DESC')->paginate(100);
    $data['descripcion'] = $crudModel1->orderBy('id', 'DESC')->paginate(100);

    $data['titulo']='producto';
   echo view('front/head',$data);
   echo view('front/navBar');
   echo view('back/administrador/productoInactivos',$data);
   echo view('front/footer');
}

   

public 	function add_validation()
	{
		helper(['form', 'url']);//primero tenemos que cargar la clase auxiliar requerida
        
        $error = $this->validate([
            'categoria_id'=>'required',
            'nombreProd'=>'required|min_length[2]',
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

/*----------------EDITAR PRODUCTO-------------- */    	

	// obtiene los datos del producto a modificar      Mysql 
    public  function fetch_single_data($id = null)
    {
        $prodModel = new Producto_Model();
        $data['prod_data'] = $prodModel->where('id', $id)->first();
        $crudModel  = new Categoria_model();
        $data['categorias'] = $crudModel->orderBy('id', 'DESC')->paginate(100);

        $dato['titulo'] = 'Editar';
            echo view('front/head',$dato);
            echo view('front/navbar');
            echo view('back/administrador/modificarProd',$data);
            echo view('front/footer');
            
    }
    /* otra forma */
     public  function edit_validation(){
        // Se obtiene la clave unica --> "id"
        $datosActuales = $this->request->getVar('id');
       
        $datos = $this->productos->where('id', $datosActuales)->first();
        
        // Se guarda el conjunto de datos recibidos
        $nuevosDatos = $this->request->getPost();
        echo($nuevosDatos);die;
        $nuevosDatos['imagen'] = $datos['imagen'];  

        $img_cargar = $this->request->getFile('imagen');
        
        if(!$img_cargar->isValid()){
            $this->productos->desvalidarImagen();
        }else{
            $modificarImagen=\Config\Services::image();
            $nombreImg= $img_cargar->getRandomName();
            // move_uploaded_file($img_cargar, "assets\img\catalogo/" . $nombreImg);
            $datosPost['imagen'] = $nombreImg;
            $nuevosDatos['imagen'] = $nombreImg;
        }
        // Se actualiza el registro
        if($this->productos->update($this->request->getVar('id'), $nuevosDatos)){
            if($img_cargar->isValid()){
              $img_cargar->move("public\assets\uploads", $nombreImg);
            $modificarImagen->withFile("public\assets\uploads" . $nombreImg)->fit(500,500)->save("public\assets\uploads" . $nombreImg);  
            }
           /*  return redirect()->to(base_url('').'/administrador/productos')->with('alertaExitosa', 'Producto Modificado exitosamente!');*/ 

        }else{

            $datos['titulo'] = 'Editar Producto';
            $datos['marcas'] = $this->marca->findAll();
            $datos['producto'] = $this->productos->where('pd_id', $datosActuales)->first();
            $datos['categorias'] = $this->categorias->findAll();
            $datos['validation'] = $this->productos->errors();
            
            echo view('front/head');
            echo view('front/navbar');
            echo view('back/administrador/modificarProd',$datos);
            echo view('front/footer');
        }
    }



    /* ddddddddddddddddddd 
    public function edit_validation(){
        $product = new Producto_model();
        $id = $this->request->getPost('id');
        $prod_item= $product->find($id);
        $old_img_name = $prod_item['imagen'];


        $file = $this->request->getFile('imagen');
     print_r($file);die;
        if($file->isValid() && !$file->hasMoved()){
            if(file_exists("public/assets/uploads/".$old_img_name)){
                unlink("public/assets/uploads/".$old_img_name);
            }
            $imageName = $file->getRandomName();
            $file->move('public/assets/uploads',$imageName);
        }
        else{
            $imageName = $old_img_name;
        }
        $data = [
            'categoria_id'   => $this->request->getPost('categoria_id'),
            'nombreProd'  => $this->request->getPost('nombreProd'),
            'imagen'=> $imageName,
            'stock'  => $this->request->getPost('stock'),
            'stock_min'  => $this->request->getPost('stock_min'),
            'precio'  => $this->request->getPost('precio'),
            'precio_venta'  => $this->request->getPost('precio_venta'),
        ];
        $product->update($id, $data);
        return redirect()->to('/produc');

    }

*/


//recibio una solicitud de formulario de datos de actualización
  /*  public  function edit_validation()
    {
    	helper(['form', 'url']);
        
        

        $error = $this->validate([
            'nombreProd'=>'required|min_length[2]',
            'stock'=>'required',
            'stock_min'=>'required',
            'precio'=>'required',
            'precio_venta'=>'required',
        ], [           
            'nombreProd'=>["required"=>"Debe ingresar nombre del producto"],
             'stock'=>["required"=>"Debe ingresar stock del producto"],
             'stock_min'=>["required"=>"Debe ingresar stroc minimo del producto"],
             'precio'=>["required"=>"Debe ingresar precio del producto"],
             'precio_venta'=>["required"=>"Debe ingresar precio venta"],
            ]
    );//validado los datos del formulario 

        $prodModel = new Producto_Model();

        $id = $this->request->getVar('id');

        $prod_item= $prodModel->find($id);
        $old_img_name = $prod_item['imagen'];

        $file = $this->request->getFile('imagen');
        if($file->isValid() && !$file->hasMoved()){
            if(file_exists("public/assets/uploads/".$old_img_name)){
                unlink("public/assets/uploads/".$old_img_name);
            }
            $imageName = $file->getRandomName();
            $file->move('public/assets/uploads',$imageName);
        }else{
            $imageName = $old_img_name;
        } if(!$error) {
        	$data['prod_data'] = $prodModel->where('id', $id)->first();
        	$data['error'] = $this->validator;
          
            $crudModel  = new Categoria_model();
            $data['categorias'] = $crudModel->orderBy('id', 'DESC')->paginate(100);
    
            $dato['titulo'] = 'Editar';
             echo view('front/head',$dato);
             echo view('front/navbar');
             echo view('back/administrador/modificarProd',$data);
             echo view('front/footer');
        } else {
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
        } } */ 
    
/*--------------------------- //FIN// EDITAR PRODUCTO ---------*/

/*--------------------------- //ALTA PRODUCTO ---------*/
public function guardarProd(){
    $input = $this->validate([
        'categoria_id'=>'is_not_unique[categorias.id]',
        'stock'=>'required',
         'nombreProd'=>'required',
         'precio'=>'required',
         'precio_venta'=>'required',
         'stock_min'=>'required',
    ],
    [
        'categoria_id'=>[
            "required"=>"Debe ingresar categoria"
        ],
        'stock'=>[
            "required"=>"Debe ingresar cantidad del producto"
        ],
         'nombreProd'=>["required"=>"Debe ingresar nombre del producto"],
         'precio'=>["required"=>"Debe ingresar precio"],
         'precio_venta'=>["required"=>"Debe ingresar precio minimo"],
         'stock_min'=>["required"=>"Debe ingresar cantidad minima"],
    ]
);

 if(!$input){
     $dato['titulo']='producto';
     echo view('front/head',$dato);
     echo view('front/navBar');
     echo view('front/administrador/productoLista',[
         'validation'=> $this->validator
     ]);
     echo view('front/footer');
 } else{
     $img= $this->request->getFile('imagen');
     $nombre_aleatorio = $img->getRandomName();
     $img->move(ROOTPATH.'public/assets/uploads',$nombre_aleatorio);

     $data = [
              'categoria_id' => $this->request->getVar('categoria_id'),
              'stock'=> $this->request->getVar('stock'),
             'nombreProd' => $this->request->getVar('nombreProd'),
             'imagen'=>$img->getName(),//obtener el nombre de la img
             'precio'=>$this->request->getVar('precio'),
             'precio_venta'=> $this->request->getVar('precio_venta'),
             'stock_min'=> $this->request->getVar('stock_min'),
             'eliminado'=> 'NO',
            ];

     $producto = new Producto_Model();
     $producto->insert($data); //inserta a la tabla de la bd

     return $this->response->redirect(site_url('produc'));

 }

 } 
 


/*--------------------------- //FIN// ALTA PRODUCTO ---------*/


/*---- ELIMINACION LOGICA---- */
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






