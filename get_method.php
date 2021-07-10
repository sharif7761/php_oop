<?php

class ABC{
    private $name = "Sharif";

    private function hello(){
        echo "Hello <br>";
    }

    public function __get($property){
        echo "You are trying to access non existing or private property ($property)";
    }
}

$a = new ABC();
$a->name;
$a->hello();