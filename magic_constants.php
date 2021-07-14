<?php

namespace myNamespace;

trait myTrait{
    public function getTrait(){
        echo "Trait Name: ". __TRAIT__ ."<br>";
    }
}

echo "Line Number: ". __LINE__ ."<br>";
echo "Full path of the file: ". __FILE__ ."<br>";
echo "Full path of the Directory: ". __DIR__ ."<br>";



class myClass{
    use myTrait;
    public function myMethod(){
        echo "Class name:" . __CLASS__ . "<br>";
        echo "Method name:" . __METHOD__ . "<br>";
    }

    public function getNamespace(){
        echo "Namespace:" . __NAMESPACE__ . "<br>";
    }
}

function myFunction(){
    echo "name of the function: ". __FUNCTION__ ."<br>";
}

myFunction();


$obj = new myClass();
$obj->myMethod();
$obj->getNamespace();
$obj->getTrait();

