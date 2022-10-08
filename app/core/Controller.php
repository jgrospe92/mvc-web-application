<?php

namespace app\core;

class Controller{
    protected function view($name, $data=[]){
        include('app\\views\\'.$name.'.php');   
    }

    // cleans up input if user tries to script attack the website
	public function validate_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}