<?php 
namespace App\Models;
use \CodeIgniter\Model;

class EmployeeModel extends Model {
    protected $table = "employees";
    protected $primaryKey = "id";
    protected $allowedFields = ["name", "email", "salary", "city", "designation"];
    protected $useTimestamps = true;
    protected $createdField = "created_at";
    protected $updatedField = "updated_at";
    protected $deleteField = "deleted_at";
}