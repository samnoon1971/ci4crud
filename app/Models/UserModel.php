<?php

namespace App\Models;

use CodeIgniter\Model;



/*
| Class description: This class models the users table
| Project Name: ci4crud
| Developed By: Brotecs Technology Limited.
| Created: 19th Sep, 2021
| Updated: 20th Sep, 2021 [S M Samnoon Abrar]
|
| For Suggestion and Query please mail to samnoonabrar@gmail.com
|
*/
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
     
    //Function performs select query on database and 
    //returns resultset if table is not empty
    //Input Parameters : Void
    //Return Parameters : resultset
    //Additional Details: N/A
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