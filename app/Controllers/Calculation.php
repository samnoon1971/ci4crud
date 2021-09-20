<?php namespace App\Controllers;


/*
| Class description: This class controlls input from a form
| and calculates addition, subtraction, multiplication
| and division operations between two integers
| Project Name: ci4crud
| Developed By: Brotecs Technology Limited.
| Created: 20th Sep, 2021
| Updated: 20th Sep, 2021 [S M Samnoon Abrar]
|
| For Suggestion and Query please mail to samnoonabrar@gmail.com
|
*/
class Calculation extends BaseController {
    
    //Function shows add_form page to browser window
    //Input Parameters : Void
    //Return Parameters : parameterOne->View;
    //Additional Details: N/A
    public function addform() {
        echo view("add_form");
    }


    //Function adds integers from input form
    //Input Parameters : Void
    //Return Parameters : parameterOne->View;
    //Additional Details: handles http POST requests
    public function submitform() {
        //retrieving input numberOne from post method
        $numberOne = $_POST['numberOne'];
        //retrieving input numberTwo from post method
        $numberTwo = $_POST['numberTwo'];
        $data = [$numberOne, $numberTwo];
        //passing data array with view
        echo view("submit_form", $data);
    }
}