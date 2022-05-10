<?php
namespace App\Models;
use CodeIgniter\Model;
class Usuarios_model extends Model
{
	protected $table = 'usuario_login';
    protected $primaryKey = 'id_login';
    protected $allowedFields = ['nombre','usuario', 'contraseña','perfil_id','baja'];
}
