<?php
namespace app\controllers;

class Contact extends \app\core\Controller{

    public function index(){
        $this->view('Contact/index');
    }

    public function read(){
        $this->view('Contact/read');
    }

    public function save_message(){
        if(isset($_POST['submit'])){
            $msgObject = new \app\models\Messages();
            $array['name'] = $msgObject->validate_input($_POST['name']);
            $array['message'] = $msgObject->validate_input($_POST['message']);
            $string_data = json_encode($array);

            $msgObject->insert($string_data);
            $this->view("Contact/read"); 
        }
    }
}