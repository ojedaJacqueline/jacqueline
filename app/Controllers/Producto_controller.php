<?php
namespace App\Controllers;
Use App\Models\Producto_Model;
use CodeIgniter\Controller;

class Producto_controller extends Controller {
   
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
	}


    





   /*   public  function ver_productos()
    {
        if((session('logged_in'))and ((session()->get('perfil_id'))==1)){
        
            $lista_productos = new Producto_Model();
            $dato = $lista_productos->get_prod();
         
            $productos = [ 'datosp' => $dato];

    $dato['titulo'] = 'Usuarios';
    echo view('front/head',$dato);
    echo view('front/navbar');
    echo view('back/administrador/productoLista',$productos);
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
    
*/


/*  


    public function store(){
       $input = $this->validate([
            'nombreProd'=>'requered|min_length[2]',
            'categoria'=>'is_not_unique[categoria.id]',
            'precio'=>'required',
            'precio_venta'=>'required',
            'stock'=>'required',
            'stock_min'=>'required',
       ]);
       //cramos producto_model(ocupamos para insertar) 
       //que es un objeto de Producto Model 
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
        $img= $this->request->getFile('imagen');
        $nombre_aleatorio = $img->getRandomName();
        $img->move(ROOTPATH.'public/assets/uploads',$nombre_aleatorio);

        //creamos un array 
        $data = [
                'nombre_prod' => $this->request->getVar('nombreProd'),
                'imagen'=>$img->getName(),
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

    }*/





