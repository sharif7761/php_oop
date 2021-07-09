<?php

class Base {
    public $name = "Base Class";

    public function cal($a, $b) {
        return $a * $b;
    }
}

class Child extends Base{
    public $name = "Child Class";

    public function cal($a, $b) {
        return $a - $b;
    }
}

$b1 = new Base();
echo $b1->name. "<br>";
echo $b1->cal(10, 3). "<br>";

$c1 = new Child();
echo $c1->name. "<br>";
echo $c1->cal(10, 3). "<br>";