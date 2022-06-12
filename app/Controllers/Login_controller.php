<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Usuarios_model;
  
class Login_controller extends Controller
{
    public function index()
    {
        helper(['form','url']);

        $dato['titulo']='login'; 
        echo view('front/head',$dato);
        echo view('front/navBar');
        echo view('back/login');
        echo view('front/footer');
    } 
    public function auth()
    {
        $session = session();
        $model = new Usuarios_model();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $model->where('email', $email)->first();

        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass and $data['baja'] == 'NO'){
                $ses_data = [
                    'id' => $data['id'],
                    'nombre' => $data['nombre'],
                    'apellido'=> $data['apellido'],
                    'email' =>  $data['email'],
                    'usuario' => $data['usuario'],
                    'perfil_id'=> $data['perfil_id'],
                    'logged_in' => TRUE
                ];
                
                $session->set($ses_data);
                /* ruta cambiar uno para adm otro para cliente */
                return redirect()->to('panel');
            }else{
                $session->setFlashdata('msg', 'Contraseña Incorrecta');
                return redirect()->to('/Login_controller');
            }
        }else{
            $session->setFlashdata('msg', 'Correo electrónico Incorrecto');
            return redirect()->to('/Login_controller');
        }
    }
    public function salir()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('inicio'));
    }
} 
