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
            $array['name'] = $_POST['name'];
            $array['message'] = $_POST['message'];
            $string_data = json_encode($array);
            $msgObject = new \app\models\Messages();
            $msgObject->insert($string_data);    
        }
    }
}