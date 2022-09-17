<?php
namespace app\controllers;

class Count extends \app\core\Controller{

    public function getCounter(){
        $counter;
        $counterObj = new app\models\Count();

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

        // $fh = fopen($filename, 'w');
        // flock($fh, LOCK_EX);
        // fwrite($fh, $counter);
    }

    public function index(){
    
        $this->view('Count/index');
    }
}

