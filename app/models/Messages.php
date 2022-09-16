<?php

namespace app\models;

class Messages{
    private static $file = 'app/resources/txt/messages.txt';
    public $email;

    public function getAll(){
        $messages = file(self::$file);
        
        $output = [];
        foreach($messages as $key => $value){
            $new_message = new Message();
            $new_message->id = $key;
            $new_message->email = $value;
            $output[] = $new_message;
        }
        return $output;
    }

    public function insert(){
        $fh = fopen(self::$file.'a');
        flock($fh, LOCK_EX);
        fwrite($fh, $this->email, "\n");
        flock($fh, LOCK_UN);
        fclose($fh);
    }

    public function __toString(){
        return $this->email;
    }
}