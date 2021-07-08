<?php

class Person {

    public function __construct($n="No name", $a=0)
    {
        $this->name = $n;
        $this->age = $a;
    }

    function showName(){
        echo "Name is: ".$this->name." and age is: ".$this->age;
    }
}

$p1 = new Person('Sharif', 24);
$p1->showName();
echo "<br>";
$p2 = new Person();
$p2->showName();