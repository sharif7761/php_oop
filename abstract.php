<?php

abstract class ParentClass {
    public $name;

    abstract protected function cal($a, $b);
}

class ChildClass extends ParentClass {

    public function cal($c, $d){
        echo $c + $d;
    }
}

$c1 = new ChildClass();
$c1->cal(19, 10);