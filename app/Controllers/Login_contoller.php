<?php
namespace App\Controllers;
Use App\Models\Login_model;
use CodeIgniter\Controller;

class Login_controller extends Controller{

	public function __construct(){
           helper(['form','url']);
	}  
    public function login() {
         $data['titulo']='Login'; 
        echo view('front/head',$data);
        echo view('front/navBar');
         echo view('back/login');
          echo view('front/footer'); 
    }
    public function formValidation() {
          helper(['form','url']); 
        $input = $this->validate([
            'usuario'  => 'required|min_length[3]',
            'password' => 'required|min_length[3]|max_length[10]'
        ]);
        $formModel = new Login_model();
        if (!$input) {
               $data['titulo']='Registro'; 
                echo view('front/head',$data);
                echo view('front/navBar');
                echo view('back/login', [
                'validation' => $this->validator
            ]);
        } else {
            $formModel->save([
              $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email'  => $this->request->getVar('email'),
                'password'  => $this->request->getVar('password'),
            ]);  
              return $this->response->redirect(site_url(''));
        }
    }
}