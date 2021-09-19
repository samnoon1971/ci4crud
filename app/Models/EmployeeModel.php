<?php 
namespace App\Models;
use \CodeIgniter\Model;



/*
| Class description: This class defines the employee table 
| Project Name: ci4crud
| Developed By: Brotecs Technology Limited.
| Created: 16th Sep, 2021
| Updated: 19th Sep, 2021 [S M Samnoon Abrar]
|
| For Suggestion and Query please mail to samnoonabrar@gmail.com
|
*/
class EmployeeModel extends Model {
    //this is a protected variable for holding employees table 
    protected $table = "employees";

    //this is a protected variable for holding primary key of employee table
    protected $primaryKey = "id";
    
    //this is a protected variable for holding allowed field in the employee table
    protected $allowedFields = ["name", "email", "salary", "city", "designation"];
    
    //this is a protected variable which tells whether timestamps are to be used
    protected $useTimestamps = true;

    //this is a protected variable for holding creation time
    protected $createdField = "created_at";

    //this is a protected variable for holding latest updation time 
    protected $updatedField = "updated_at";

    //this is a protected variable for holding deletion time
    protected $deleteField = "deleted_at";
    
    //this is a protected variable for specifing the return data type for the EmployeeModel 
    protected $returnType = "array";
    

    //defines the validation rules for submitting new employee data to the database
    protected $validationRules = [
        "name" => "required|alpha_numeric_space|min_length[3]",
        "email" => "required|valid_email|is_unique[employees.email]",
        "salary" => "required|min_length[4]",
    ];

    protected $validationMessages = [
        "email" => [
            "is_unique" => "Email not unique, Please choose another",
            "valid_email" => "Email is not valid, try again",
            "required" => "Email is required",
        ]
    ];
}