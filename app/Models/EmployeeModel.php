<?php 
namespace App\Models;
use \CodeIgniter\Model;



/*
| Class description: This class defines the employee table 
| Project Name: ci4crud
| Developed By: Brotecs Technology Limited.
| Created: 16th Sep, 2021
| Updated: 19th Sep, 2013 [S M Samnoon Abrar]
|
| For Suggestion and Query please mail to samnoonabrar@gmail.com
|
*/
class EmployeeModel extends Model {
    protected $table = "employees";
    protected $primaryKey = "id";
    protected $allowedFields = ["name", "email", "salary", "city", "designation"];
    protected $useTimestamps = true;
    protected $createdField = "created_at";
    protected $updatedField = "updated_at";
    protected $deleteField = "deleted_at";
    protected $returnType = "array";
    

    //defines the validation rules for submitting new employee data to the database
    protected $validationRules = [
        "name" => "required|alpha_numeric_space|min_length[3]",
        "email" => "required|valid_email|is_unique[employees.email]",
        "salary" => "required|min_length[4]",
    ];
}