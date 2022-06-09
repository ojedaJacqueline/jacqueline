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
/* -------------------//FIN// Muestra la lista de usuarios de la BD------------------ */

/*----------------EDITAR USUARIO-------------- */    

public   function add()//vista 
	{
        $dato['titulo'] = 'Editar';
        echo view('front/head',$dato);
        echo view('front/navbar');
        echo view('back/administrador/modificarUser');
        echo view('front/footer');

	}
public 	function add_validation()
	{
		helper(['form', 'url']);//primero tenemos que cargar la clase auxiliar requerida
        
        $error = $this->validate([
            'nombre'   => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'email'    => 'required|min_length[4]|max_length[100]|valid_email',
            'usuario'  => 'required|min_length[3]',
            'perfil'  => 'required|min_length[1]'
        ]);//validar los datos del formulario

        

        if(!$error)
        {
            $dato['titulo'] = 'Editar';
            echo view('front/head',$dato);
            echo view('front/navbar');
            echo view('back/administrador/modificarUser',[
                'error' => $this->validator
            ]);
            echo view('front/footer');
        } 
        else 
        {
            $crudModel = new Usuarios_model();
            
            $crudModel->save([
                
                'nombre'   => $this->request->getVar('nombre'),
                'apellido'  => $this->request->getVar('apellido'),
                'email'  => $this->request->getVar('email'),
                'usuario'  => $this->request->getVar('usuario'),
                'perfil_id'  => $this->request->getVar('perfil_id'),
            ]);//si pasa las reglas de validacion,se carga con la funcion save los datos a la tabla mysql         
            
            $session = \Config\Services::session();

            $session->setFlashdata('success', 'User Data Added');//mostrar el mensaje de éxito

            return $this->response->redirect(site_url('/userActivo'));
        }

	}



	// obtener datos de un solo usuario de Mysql 
    public  function fetch_single_data($id = null)
    {
        $crudModel = new Usuarios_model();

        $data['user_data'] = $crudModel->where('id', $id)->first();
        
        $dato['titulo'] = 'Editar';
            echo view('front/head',$dato);
            echo view('front/navbar');
            echo view('back/administrador/modificarUser',$data);
            echo view('front/footer');

    }

//recibio una solicitud de formulario de datos de actualización
    public  function edit_validation()
    {
    	helper(['form', 'url']);
        
        $error = $this->validate([
            'nombre'   => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'email'    => 'required|min_length[4]|max_length[100]|valid_email',
            'usuario'  => 'required|min_length[3]',
            'perfil_id'  => 'required|min_length[1]'
        ]);//validado los datos del formulario 

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
                
	            'nombre'   => $this->request->getVar('nombre'),
                'apellido'  => $this->request->getVar('apellido'),
                'email'  => $this->request->getVar('email'),
                'usuario'  => $this->request->getVar('usuario'),
                'perfil_id'  => $this->request->getVar('perfil_id')
	        ];

        	$crudModel->update($id, $data); //ha actualizado los datos de la tabla mysql

        	$session = \Config\Services::session();

            $session->setFlashdata('success', 'User Data Updated');

        	return $this->response->redirect(site_url('/userActivo'));
        }
    }



















//  public  function fetch_single_data($id = null)
//  /*  esta función ha recibido una solicitud para obtener datos 
//     de un solo usuario de Mysql user_table(usuarios) */ 
//     {
//         $crudModel = new Usuarios_model();
// /*funcion WHERE obtener datos de un solo usuario*/ /* funcion FIRST luego 
//  cargar esos datos en el archivo de vistas edit_data.php(modificarUser.php) */
       
// public function add()
//     {
//         $dato['titulo'] = 'Editar';
//         echo view('front/head',$dato);
//         echo view('front/navbar');
//         echo view('back/administrador/modificarUser');
//         echo view('front/footer');
//     }

//    public function edit_validation()
//     {
//     	helper(['form', 'url']);
        
//         $error = $this->validate([
//             'name' 	=> 'required|min_length[3]',
//             'email' => 'required|valid_email',
//             'gender'=> 'required'
//         ]);

//         $crudModel = new Usuarios_model();

//         $id = $this->request->getVar('id');

//         if(!$error)
//         {
//         	$data['user_data'] = $crudModel->where('id', $id)->first();
//         	$data['error'] = $this->validator;
        	
//             $dato['titulo'] = 'Editar';
//                 echo view('front/head',$dato);
//                 echo view('front/navbar');
//                 echo view('back/administrador/modificarUser',$data);
//                 echo view('front/footer');
//         } 
//         else 
//         {
// 	        $data = [
//                 'nombre' => $this->request->getVar('nombre'),
//                 'apellido' => $this->request->getVar('apellido'),
//                 'usuario' => $this->request->getVar('usuario'),
//                 'email'  => $this->request->getVar('email'),
// 	        ];
//         	$crudModel->update($id, $data);
//           /*UPDATE ha actualizado los datos de la tabla mysql */
//         }
//     }
// }

    /*----------------//FIN//EDITAR USUARIO-------------- */ 


















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