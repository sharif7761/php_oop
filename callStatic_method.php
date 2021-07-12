<?php

class ABC{
    private static function hello($name){
        echo "This is static hello $name";
    }

    public static function __callStatic($method, $args){
        if(method_exists(__class__, $method)){
            call_user_func_array([__class__, $method], $args);
        } else{
            echo "Method does not exists ($method)";

        }
    }
}


ABC::hello('Sharif');
