<?php

namespace app\models;

class Messages{

    private static $file = 'app/resources/txt/log.txt';
    
    public function insert($string_data){
           // write to a fileW
           $fh = fopen(self::$file,'a');
           flock($fh, LOCK_EX);
           fwrite($fh, $string_data . "\n");
           flock($fh, LOCK_UN);
           fclose($fh);
           header('location:/Contact/read');
    }

    public function get_file(){
        return self::$file;
    }
    
    // cleans up input if user tries to script attack the website
	public function validate_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}