<?php
namespace App\Models;
use CodeIgniter\Model;

class Consultas_model extends Model
{ 
	protected $table = 'consultas';
    protected $primaryKey = 'id_contacto';
    protected $allowedFields = ['nya','email','asunto','mensaje','registrado'];
}