<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id', 'firstname', 'lastname', 'email', 'password'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
    public function getUsers() {
        $db = \Config\Database::connect();
        $query = $this->db->query("select id, lastname, firstname, email, password from users");
        $result = $query->getResult();
        if(count($result) > 0) {
            return $result;
        }
        else {
            return false;
        }
    }
}