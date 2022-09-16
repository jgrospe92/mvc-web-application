<?php

namespace app\models;

class Count{
  
  public $counter;

  public function getContent($filename){
    $contents = file($filename);
    $output = [];
    $index = 0;
    foreach($contents as $content) {
        $item = new Count();
        $item->counter = $content;
        $output[] = $item;
        $index++;
    }
    return $output;
  }
}