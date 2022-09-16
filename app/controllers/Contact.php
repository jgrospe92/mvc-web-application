<?php
namespace app\controllers;

class Contact extends \app\core\Controller{

    public function index(){
        $this->view('Contact/index');
    }

    public function read(){
        $this->view('Contact/read');
    }
}