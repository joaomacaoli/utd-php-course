<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $DBGroup = "default";
    protected $table      = '_users';
    protected $primaryKey = 'id_user';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = [ 'id_user', 'user_name','user_email','user_password','user_cpf','user_phone','user_adddress','user_type','user_created_in'];


    public function dadosUsuario($id){
    	return $this->where("id_user", $id)->findAll();
    }

}
