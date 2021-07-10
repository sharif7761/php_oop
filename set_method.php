<?php

class ABC{
    private $name;

    public function hello(){
        echo "Hello $this->name <br>";
    }

    public function __get($property){
        echo "You are trying to access non existing or private property ($property)";
    }

    public function __set($property, $value){
        if(property_exists($this, $property)){
            $this->$property = $value;
        }else {
            echo "You are trying to access non existing or private property ($property)";
        }
    }
}

$a = new ABC();
$a->name = "Sharif";
$a->hello();