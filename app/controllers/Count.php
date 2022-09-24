<?php
namespace app\controllers;

class Count extends \app\core\Controller{

  
    public function index(){
    
        $this->view('Count/index');
    }

    public function counter_controller(){

        $counterObj = new \app\models\Count();
        $filename = $counterObj->get_file_name();
        if(file_exists($filename)){
            $counter = $counterObj->get_counter();
        }
        else {
            $counter = 0;
        }
        $dCounter = json_decode($counter);
        $counter = json_encode(++$dCounter);
        echo $counter;
        $counterObj->counter = $counter;
        $counterObj->write_to_file_counter();

        $fh = fopen($filename, 'w');
        flock($fh, LOCK_EX);
        fwrite($fh, $counter);
    }

}

