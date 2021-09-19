<?php
namespace App\Controllers;
use \CodeIgniter\Controller;
use App\Models\EmployeeModel;




/*
| Class description: This class controlls employee operations
| and acts as a middleman between frontend view and database
| Project Name: ci4crud
| Developed By: Brotecs Technology Limited.
| Created: 18th Sep, 2021
| Updated: 19th Sep, 2013 [S M Samnoon Abrar]
|
| For Suggestion and Query please mail to samnoonabrar@gmail.com
|
*/

class Employee extends Controller {
    public $empModel;
    //Function acts as a constructor
    //Input Parameters : Void
    //Return Parameters : Void;
    //Additional Details: This function includes helpers
    public function __contruct() {
        helper("form");
        $this->empModel = new EmployeeModel();
    }

    //Function adds employee data to the database
    //Input Parameters : Void
    //Return Parameters : Void;
    //Additional Details: N/A
    public function addEmp() {

    }


    //Function views employee data from the database
    //Input Parameters : Void
    //Return Parameters : parameterOne->JSON data;
    //Additional Details: N/A
    public function viewEmp() {

    }

    //Function views employee data from the database
    //Input Parameters : parameterOne->Integer
    //Return Parameters : Void;
    //Additional Details: N/A
    public function editEmp($id = null) {

    }


    //Function deletes employee data from the database
    //Input Parameters : Void
    //Return Parameters : Void;
    //Additional Details: N/A
    public function deleteEmp() {

    }
}