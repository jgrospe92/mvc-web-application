<?php

namespace app\models;

class Count{
  
  public $counter;
  private static $filename = 'app/resources/txt/counter.txt';


  public function get_counter(){
    $fh = fopen($filename, 'r');
    flock($fh, LOCK_SH);
    $counter = (int)fread($fh, filesize($filename));
    fclose($fh);
    return  $counter;
  }

  public function write_to_file_counter(){
    $fh = fopen($filename, 'w');
    flock($fh, LOCK_EX);
    fwrite($fh, $counter);
  }

}