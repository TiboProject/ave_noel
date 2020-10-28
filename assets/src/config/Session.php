<?php

namespace App\config;

Class Session{

    public function set($name, $value){
        $_SESSION[$name]=$value;
    }

    public function get($name){
        if(isset($_SESSION[$name])){
            return $_SESSION[$name];
        }
        
    }

    public function showFlashMessage($name){
        if(isset($_SESSION[$name])){
            $message = $this->get($name);
            $this->remove($name);
            return $message;
        }
        return null;
    }

    public function remove($name){
        unset($_SESSION[$name]);
    }

    public function stop(){
        session_destroy();
    }

}