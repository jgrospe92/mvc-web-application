<?php
namespace app\controllers;

class Count extends \app\core\Controller{

    public function getCounter(){
        $counter;
        $filename = 'app/resources/txt/counter.txt';

        if(file_exists($filename)){
            $fh = fopen($filename, 'r');
            flock($fh, LOCK_SH);
            $counter = (int)fread($fh, filesize($filename));
            fclose($fh);
        }
        else {
            $counter = 0;
        }
        $dCounter = json_decode($counter);
        $counter = json_encode(++$dCounter);
        echo $counter;
        $fh = fopen($filename, 'w');
        flock($fh, LOCK_EX);
        fwrite($fh, $counter);
    }

    public function index(){
    
        $this->view('Count/index');
    }
}

