<?php

namespace App\Controllers;
use App\Models\Usuarios_model;
use CodeIgniter\Controller;

class Usuario_crud_controller extends Controller
{

    /*-------------Muestra la lista de usuarios de la BD------------*/
    /*-----VISTA USUARIO ACTIVOS -----*/
    public  function miAdmVerUsuariosActivos()
    {
        $crudModel = new Usuarios_model();

        $data['user_data'] = $crudModel->orderBy('id', 'DESC')->paginate(10);

        $dato['titulo'] = 'Usuarios';
        echo view('front/head', $dato);
        echo view('front/navbar');
        echo view('back/administrador/miAdmVerUsuariosActivos', $data);
        echo view('front/footer');
    }
    /* -------------------//FIN// Muestra la lista de usuarios de la BD------------------ */
    /*----- VISTA USUARIO INACTIVOS----*/
    public  function UserInactivos()
    {
        $crudModel = new Usuarios_model();

    $data['user_data'] = $crudModel->orderBy('id','ASC')->findAll();

     $data['titulo']='UserInactivos';
       echo view('front/head',$data);
       echo view('front/navBar');
       echo view('back/administrador/UserInactivos',$data);
       echo view('front/footer');
    } 
    /*----------------EDITAR USUARIO-------------- */

    public   function add() //vista 
    {
        $dato['titulo'] = 'Editar';
        echo view('front/head', $dato);
        echo view('front/navbar');
        echo view('back/administrador/modificarUser');
        echo view('front/footer');
    }
    public     function add_validation()
    {
        helper(['form', 'url']); //primero tenemos que cargar la clase auxiliar requerida

        $error = $this->validate([
            'nombre'   => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'email'    => 'required|min_length[4]|max_length[100]|valid_email',
            'usuario'  => 'required|min_length[3]',
            'perfil'  => 'required|min_length[1]'
        ]); //validar los datos del formulario



        if (!$error) {
            $dato['titulo'] = 'Editar';
            echo view('front/head', $dato);
            echo view('front/navbar');
            echo view('back/administrador/modificarUser', [
                'error' => $this->validator
            ]);
            echo view('front/footer');
        } else {
            $crudModel = new Usuarios_model();

            $crudModel->save([

                'nombre'   => $this->request->getVar('nombre'),
                'apellido'  => $this->request->getVar('apellido'),
                'email'  => $this->request->getVar('email'),
                'usuario'  => $this->request->getVar('usuario'),
                'perfil_id'  => $this->request->getVar('perfil_id'),
            ]); //si pasa las reglas de validacion,se carga con la funcion save los datos a la tabla mysql         

            $session = \Config\Services::session();

            $session->setFlashdata('success', 'User Data Added'); //mostrar el mensaje de éxito

            return $this->response->redirect(site_url('/userActivo'));
        }
    }



    // obtener datos de un solo usuario de Mysql 
    public  function fetch_single_data($id = null)
    {
        $crudModel = new Usuarios_model();
        $data['user_data'] = $crudModel->where('id', $id)->first();
        $dato['titulo'] = 'Editar';
        echo view('front/head', $dato);
        echo view('front/navbar');
        echo view('back/administrador/modificarUser', $data);
        echo view('front/footer');
    }
    //recibio una solicitud de formulario de datos de actualización
    public  function edit_validation()
    {
        helper(['form', 'url']);
        $error = $this->validate(
            [
                'nombre'   => 'required|min_length[3]',
                'apellido' => 'required|min_length[3]|max_length[25]',
                'email'    => 'required|min_length[4]|max_length[100]|valid_email',
                'usuario'  => 'required|min_length[3]',
                'perfil_id'  => 'required|min_length[1]'
            ],

            [   // Errors
                'nombre' => [
                    'required' => 'error al ingresar nombre ',
                ],
                'apellido' => [
                    'required' => 'error al ingresar apellido ',
                ],
                'email' => [
                    'required' => 'error al ingresar email ',
                ],
                'usuario' => [
                    'required' => 'error al ingresar usuario ',
                ],
                'perfil_id' => [
                    'required' => 'error al ingresar perfil ',
                ],

            ]
        ); //validado los datos del formulario 

        $crudModel = new Usuarios_model();

        $id = $this->request->getVar('id');

        if (!$error) {
            $data['user_data'] = $crudModel->where('id', $id)->first();
            $data['error'] = $this->validator;

            $dato['titulo'] = 'Editar';
            echo view('front/head', $dato);
            echo view('front/navbar');
            echo view('back/administrador/modificarUser', $data);
            echo view('front/footer');
        } else {
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
    /*----------------//FIN//EDITAR USUARIO-------------- */
/*-------------------CREAR USUARIO -------------------*/

	public function __construct(){
           helper(['form','url']);
	}  
    public function create() {
         
        $data['titulo']='CrearUsuario'; 
         echo view('front/head',$data);
         echo view('front/navBar');
         echo view('back/administrador/crearUser');
          echo view('front/footer'); 
    }
    public function formValidation() {
          helper(['form','url']); 
        $input = $this->validate([
            'nombre'   => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'email'    => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'usuario'  => 'required|min_length[3]',
            'password' => 'required|min_length[3]|max_length[10]'
        ], [   // Errors
            'nombre' => [
                'required' => 'error al ingresar nombre ',
            ],
            'apellido' => [
                'required' => 'error al ingresar apellido ',
            ],
            'email' => [
                'required' => 'error al ingresar email ',
            ],
            'usuario' => [
                'required' => 'error al ingresar usuario ',
            ],
            'password' => [
                'required' => 'error al ingresar contraseña ',
            ],

        ]);
        $formModel = new Usuarios_model();
        if (!$input) {
               $data['titulo']='CrearUsuario'; 
                echo view('front/head',$data);
                echo view('front/navBar');
                echo view('back/administrador/crearUser', [
                'validation' => $this->validator
            ]);
        
        } else {
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email'  => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ]); 
             
              return $this->response->redirect(site_url('/'));
        }
    }
/*-------------------//FIN//CREAR USUARIO -------------------*/
/*---- ELIMINACION LOGICA---- */
    public function eliminacionLogica($id = null)
    {
        $crudModel = new Usuarios_model();
        $data = $crudModel->where('id', $id)->first();
        if ($data['baja'] == 'NO') {

            $data1 = [
                'baja' => 'SI'
            ];

            $crudModel->update($id, $data1); //ha actualizado los datos de la tabla mysql
            $session = \Config\Services::session();

            $session->setFlashdata('success', 'User Data Updated');

            return $this->response->redirect(site_url('/userActivo'));
        } else {
            $data1 = [
                'baja' => 'NO'
            ];

            $crudModel->update($id, $data1); //ha actualizado los datos de la tabla mysql
            $session = \Config\Services::session();

            $session->setFlashdata('success', 'User Data Updated');

            return $this->response->redirect(site_url('/userActivo'));
        }
    }
    /*---- //FIN//ELIMINACION LOGICA---- */
}
