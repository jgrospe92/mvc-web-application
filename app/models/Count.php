<?php

namespace app\models;

class Count{
  
  public $counter;
  private static $filename = 'app/resources/txt/counter.txt';

  public function get_counter(){
    $fh = fopen(self::$filename, 'r');
    flock($fh, LOCK_SH);
    $this->counter = (int)fread($fh, filesize(self::$filename));
    fclose($fh);
    return $this->counter;
  }

  public function get_file_name(){
    return  self::$filename;
  }

  public function write_to_file_counter(){
    $fh = fopen(self::$filename, 'w');
    flock($fh, LOCK_EX);
    fwrite($fh, $this->counter);
  }

}