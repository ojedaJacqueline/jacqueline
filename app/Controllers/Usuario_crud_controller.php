<?php
namespace App\Controllers;
Use App\Models\Usuarios_model;
use CodeIgniter\Controller;
class Usuario_crud_controller extends Controller{

/*-------------Muestra la lista de usuarios de la BD------------*/
 public  function miAdmVerUsuariosActivos()
	{
		$crudModel = new Usuarios_model();

		$data['user_data'] = $crudModel->orderBy('id', 'DESC')->paginate(10);

        $dato['titulo'] = 'Usuarios';
        echo view('front/head',$dato);
        echo view('front/navbar');
        echo view('back/administrador/miAdmVerUsuariosActivos',$data);
        echo view('front/footer');
	}
/* ------------------------------------- */
/*----------------EDITAR USUARIO-------------- */    

 public  function fetch_single_data($id = null)
 /*  esta función ha recibido una solicitud para obtener datos 
    de un solo usuario de Mysql user_table(usuarios) */ 
    {
        $crudModel = new Usuarios_model();
/*funcion WHERE obtener datos de un solo usuario*/ /* funcion FIRST luego 
 cargar esos datos en el archivo de vistas edit_data.php(modificarUser.php) */
        $data['user_data'] = $crudModel->where('id', $id)->first();

        $dato['titulo'] = 'Editar';
        echo view('front/head',$dato);
        echo view('front/navbar');
        echo view('back/administrador/modificarUser',$data);
        echo view('front/footer');
    }

   public function edit_validation()
    {
    	helper(['form', 'url']);
        
        $error = $this->validate([
            'name' 	=> 'required|min_length[3]',
            'email' => 'required|valid_email',
            'gender'=> 'required'
        ]);

        $crudModel = new Usuarios_model();

        $id = $this->request->getVar('id');

        if(!$error)
        {
        	$data['user_data'] = $crudModel->where('id', $id)->first();
        	$data['error'] = $this->validator;
        	
            $dato['titulo'] = 'Editar';
                echo view('front/head',$dato);
                echo view('front/navbar');
                echo view('back/administrador/modificarUser',$data);
                echo view('front/footer');
        } 
        else 
        {
	        $data = [
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email'  => $this->request->getVar('email'),
	        ];
        	$crudModel->update($id, $data);
          /*UPDATE ha actualizado los datos de la tabla mysql */
        }
    }


















//la primera manera
/*   public  function miAdmVerUsuariosActivos()
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

        }*/


   
}