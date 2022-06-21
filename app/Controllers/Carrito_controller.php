<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Usuarios_model;
use App\Models\Producto_Model;
use App\Models\VentaCabecera_model;
use App\Models\VentasDetalle_model;
use App\Models\VentasDetaller_model;


class Carrito_controller extends BaseController
 {
  /*  public function __construct()
    {
       helper(['from','url','cart']);
      
       $session = session();
       $cart   = \Config\Services::Cart();
       $cart->contents();

       // $cartContents = $this->session->get('cart_Contents');
 if ( $cart == NULL ){
     
    $cart = ['car_total' => 0 , 'total_items' => 0 ];
 }
       log_message('info','Cart Class initialized');
    }
 */
 
    public function catalogo(){
      
     //$session=session();
    // $data['perfil_id'] = $session['perfil_id'];
    // $data['nombre']  =  $session['nombre'];
     //$dato = array ('titulo'=>'Todos los productos');
   
     $productoModel = new Producto_model();
     $data['producto'] = $productoModel->orderBy('id','DESC')->findAll();

     $dato['titulo']  =  'productos disponibles';
    echo view('front/head',$dato);
    echo view('front/navBar');
    echo view('back/cliente/miCatalogo',$data);
    echo view('front/footer');

    }
    public function catalogoc(){
      
        //$session=session();
       // $data['perfil_id'] = $session['perfil_id'];
       // $data['nombre']  =  $session['nombre'];
        //$dato = array ('titulo'=>'Todos los productos');
      
        $productoModel = new Producto_model();
        $data['producto'] = $productoModel->orderBy('id','DESC')->findAll();
   
        $dato['titulo']  =  'productos disponibles';
       echo view('front/head',$dato);
       echo view('front/navBar');
       echo view('back/cliente/miCatalogoc',$data);
       echo view('front/footer');
   
       }
       public function catalogop(){
      
        //$session=session();
       // $data['perfil_id'] = $session['perfil_id'];
       // $data['nombre']  =  $session['nombre'];
        //$dato = array ('titulo'=>'Todos los productos');
      
        $productoModel = new Producto_model();
        $data['producto'] = $productoModel->orderBy('id','DESC')->findAll();
   
        $dato['titulo']  =  'productos disponibles';
       echo view('front/head',$dato);
       echo view('front/navBar');
       echo view('back/cliente/miCatalogop',$data);
       echo view('front/footer');
   
       }



    public function carritoViews()
{
    $sesion = session();
    $cart = \Config\Services::Cart();
    $productoModel = new Producto_model();
    $data['producto'] = $productoModel->findAll();
    $data['cart'] = $this->request->getVar('cart');
    $cart->contents();
    $cart = array('cart' => $cart);

  $data['titulo']='Carrito_Compra';
    echo view('front/head',$data);
    echo view('front/navBar');
    echo view('back/cliente/micarrito', $cart);
    echo view('front/footer');

}
 

/*   public function carroCompra(){
    $session=session(); 
    $cart = \Config\Services::Cart();

    $productoModel = new Producto_model();
    $data['producto'] = $productoModel->findAll();
    $data['cart'] = $this->request->getVar('cart');
   
    $dato = array('titulo' => 'Todos los productos');
    //$productoModel = new Producto_model();
    //$data['producto'] = $productoModel->orderBy('id','DESC')->findAll();

    echo view('front/head',$dato);
    echo view('front/navBar');
    echo view('back/cliente/carrito');
    echo view('front/footer');
  } */


    public function AgregarCarrito(){

        $cart = \Config\Services::Cart();
        $request = \Config\Services::request();

        
        $cart->insert(array(
            
            'id' => $request->getPost('id'),
            'qty' => 1,
            'price' => $request->getPost('precio'),
            'name' => $request->getPost('nombre'),
            'imagen' => $request->getPost('imagen'),
        ));
      
        //$cart->destroy();
        return redirect()->back()->withInput();
    }



/* FALTA IMPLEMENTAR EN LA VISTA Y TERMINAR LA FUNCION GUARDAR */
/* 
    public function actualizar_carrito(){
        $cart = \Config\Services::Cart();
        $request = \Config\Services::request();

        $cart->update(array(
            'id' => $request->getPost('id'),
            'qty' => 1,
            'price' => $request->getPost('precio_venta'),
            'name' => $request->getPost('nombreProd'),
        ));
        return redirect()->back()->withInput();
    }
  */
/*      public function muestra(){
      helper(['form','url','cart']);
      
      $cart = \Config\Services::Cart();
      $cart = $cart->contents();
      $dato = array('titulo'=>'confirmar compra');

      $session = session();
      $nombre = $session->get('nombre');
      $perfil_id =$session->get('perfil_id');
      $email=$session->get('email');

      echo view('front/head',$dato);
      echo view('front/navBar');
      echo view('back/cliente/carrito_parte');
      echo view('front/footer');

     } */

     /* FALTA */
 public function guardarCompra()
{
    $sesion = session();
    $data['id'] =  $sesion ->get('id');
    $GranTotal = 0;
    
    $cart = \Config\Services::cart();
    if ( $cart = $cart->contents()):
       foreach ($cart as $item):
            $GranTotal =$GranTotal + $item['subtotal'];
             
         endforeach;
    endif;

    $vtaCabeceraModel = new VentaCabecera_model();
    $ventacab =[
               'fecha' => date('Y-m-d'),
               'usuarios_id' => $data['id'],
               'total_venta' => $GranTotal,
    ];
   

$venta_id =   $vtaCabeceraModel->insert($ventacab);


/* VENTA DETALLE */
$cart = \Config\Services::cart();
if( $cart = $cart->contents()):
    $vtaDetalleModel = new VentasDetalle_model();
     foreach ($cart as $item):
        $ventaDet = [
            'ventas_id' => $venta_id,
            'productos_id' => $item['id'],
            'cantidad' => $item['qty'],
            'precio' => $item['price'],
            'total' => $item['subtotal']
        ];
       
     $vtaDetalleModel ->insert($ventaDet);
   
     $producto = new Producto_Model();
     $prod= $producto->find($item['id']);

     //actualiza stock de producto
     $dato = [
         'nombreProd' => $prod['nombreProd'],
         'imagen'=> $prod['imagen'],
         'categoria_id' => $prod['categoria_id'],
         'precio'=>$prod['precio'],
         'precio_venta'=> $prod['precio_venta'],
         'stock'=> $prod['stock'] - $item['qty'],
     ];

     $producto->update($prod['id'], $dato);




    endforeach;
endif;


$cart = \Config\Services::cart();
$cart->destroy();
return $this->response->redirect(site_url('exitodecompra'));




}





/*  {
    $fromModelCabecera = new VentaCabecera_model();
    $fromModelCabecera ->save([
         'usaurio_id'=> $this->request->getVAr('usuario_id'),//name
         'total_venta' => $this->request->getVAr('importeTotal')
    ]);
   $arrayResumen = $fromModelCabecera->findAll(); 

   $formModelDetalle = new VentasDetalle_model();

   $cantProductos = $this->request->getVAr('contador');
   for($j = 1 ; $j < $cantProductos; $j++){
    $formModelDetalle->save([

         'ventas_id' => end($arrayResumen)['id'],
         'productos_id' => $this->request->getVAr($j.'prod'),
         'cantidad' => $this->request->getVAr($j.'cantidad'),
         'total' => $this->request->getVAr($j.'subtotal')   
    ]);
   }
   $cart = \Config\Services::Cart();
   $cart->destroy();
   $session = session();
   $session ->setFlashdata('msg','compra realizada con exito');
   return redirect('ca');

 }
 */





 public function eliminar_prod_carrito(){
    $request = \Config\Services::request();
    $cart = \Config\Services::cart();
    
    $rowid = $request->getPostGet('rowid');

    $cart ->remove($rowid);

    return redirect()->route('ca');

    //id = id del producto
    //rowid = fila del producto
}


    public function eliminar_carrito(){
        $cart = \Config\Services::Cart();
        $cart->destroy();

        return $this->response->redirect(site_url('ca'));
    }

}

