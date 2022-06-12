<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Consultas_model;
  
class Consulta_controller extends Controller
{

    /*------------- realiza la consulta para los logeados y no logeados -----------*/
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
/*-------------//FIN// realiza la consulta para los logeados y no logeados -----------*/
/*----ver la lista de consultas ------*/
public  function VerConsultas()
{
    $crudMode = new Consultas_model();
    $data['consul_data'] = $crudMode->orderBy('id', 'DESC');

    $dato['titulo'] = 'Consultas';
    echo view('front/head', $dato);
    echo view('front/navbar');
    echo view('back/administrador/consultasLog',$data);
    echo view('front/footer');
}
/*----//fin// ver la lista de consultas ------*/
}