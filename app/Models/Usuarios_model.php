<?php
namespace App\Models;
use CodeIgniter\Model;

/*TODO: tabla de USUARIO de la BD */
class Usuarios_model extends Model
{
	protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'apellido', 'usuario', 'email', 'password','perfil_id','baja'];

 public function get_user(){
     /* consutla a la BD */
$usuarios= $this->db->query("SELECT * FROM usuarios");
return $usuarios->getResult();

}

}
