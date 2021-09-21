<?php
namespace App\Controllers;
use \CodeIgniter\Controller;
use app\Models\EmployeeModel;




/*
| Class description: This class controlls employee operations
| and acts as a middleman between frontend view and database
| Project Name: ci4crud
| Developed By: Brotecs Technology Limited.
| Created: 16th Sep, 2021
| Updated: 19th Sep, 2021 [S M Samnoon Abrar]
|
| For Suggestion and Query please mail to samnoonabrar@gmail.com
|
*/

class Employee extends BaseController {
    //this is a public variable for holding employee model 
    public $empModel;
    //Function acts as a constructor
    //Input Parameters : Void
    //Return Parameters : Void
    //Additional Details: This function includes helpers
    public function __construct() {
        helper("form");
        $this->empModel = new EmployeeModel();
    }

    //Function adds employee data to the database
    //Input Parameters : Void
    //Return Parameters : parameterOne->View;
    //Additional Details: N/A
    public function addEmp() {
        if($this->request->getMethod() == "post") {
            $data = [
                "name" => $this->request->getVar("name", FILTER_SANITIZE_STRING),
                "email" => $this->request->getVar("email", FILTER_SANITIZE_EMAIL),
                "salary" => $this->request->getVar("salary", FILTER_SANITIZE_STRING),
                "designation" => $this->request->getVar("desg", FILTER_SANITIZE_STRING),
                "city" => $this->request->getVar("city", FILTER_SANITIZE_STRING),
            ];
            if($this->empModel->save($data) == true) {
                echo "Success";
            }
        }
        return view("Views/empadd_view", ["errors" => this->empModel->errors()]);
    }


    //Function views employee data from the database
    //Input Parameters : Void
    //Return Parameters : parameterOne->View;
    //Additional Details: N/A
    public function viewEmp() {
         echo "VIEW";
    }

    //Function views employee data from the database
    //Input Parameters : parameterOne->Integer
    //Return Parameters : parameterOne->View;
    //Additional Details: N/A
    public function editEmp($id = null) {

    }


    //Function deletes employee data from the database
    //Input Parameters : Void
    //Return Parameters : parameterOne->View;
    //Additional Details: N/A
    public function deleteEmp() {

    }
}