<?php namespace App\Models;

use CodeIgniter\Model;

class ClientesModel extends Model
{
	protected $table = 'clientes';
	protected $allowedFields = ['nome', 'email', 'endereco'];
}