<?php
namespace App\Models;
use CodeIgniter\Model;
class Producto_Model extends Model
{
	protected $table = 'productos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombreProd','imagen', 'categoria_id','precio','precio_venta','stock','stock_min','eliminado'];
    
   
   }
