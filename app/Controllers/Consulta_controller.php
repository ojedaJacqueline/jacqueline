<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Consultas_model;
  
class Consulta_controller extends Controller
{
	public function __construct(){
        helper(['form','url']);
 }  
    public function guardar_consulta()
{ 

    if (session()->get('logged_in') != 'TRUE') : 
        $registrado = 'NO';
    else :
            $registrado = 'SI';
    endif;

    $formModel = new Consultas_model();

    $formModel->save([
        'nya' => $this->request->getVar('nya'),
        'email' => $this->request->getVar('email'),
        'asunto' => $this->request->getVar('asunto'),
        'mensaje'  => $this->request->getVar('texto'),
        'registrado' => $registrado,
    ]); 

    $data['titulo']='contacto';
    $data['info']='Se envio su consulta, Gracias!!';

    echo view('front/head',$data);
    echo view('front/navBar');
    echo view('front/contacto',$data);
    echo view('front/footer');
    }
}