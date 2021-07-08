<?php

class Calculation {
    public $a, $b, $c;

    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

$c1= new Calculation();
$c1->a = 20;
$c1->b = 10;
echo "Sub is : " . $c1->sub();
echo "<br>";
echo "Sum is :". $c1->sum();

