<?php namespace App\Controllers;



/*
| Class description: This class controlls input from a form
| and stores user information
| Project Name: ci4crud
| Developed By: Brotecs Technology Limited.
| Created: 20th Sep, 2021
| Updated: 20th Sep, 2021 [S M Samnoon Abrar]
|
| For Suggestion and Query please mail to samnoonabrar@gmail.com
|
*/
class User extends BaseController {
    
    
    //Function shows add_form page to browser window
    //Input Parameters : Void
    //Return Parameters : parameterOne->View;
    //Additional Details: N/A
    public function addform() {
        echo view("add_form");
    }


    //function displays user data to view page
    //Input Parameters : Void
    //Return Parameters : parameterOne->View;
    //Additional Details: handles http POST requests
    public function submitform() {
        $data = [
        'firstname' => $_POST['firstname'],
        'lastname' => $_POST['lastname'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        ];
        //passing data to view
        
        echo view("submit_form", $data);
    }
    public function viewuser() {
        $query = $db->query("select * from users;");
         $result = $query->getResult();
         print_r($result);
        echo "HELLO";
    }
}