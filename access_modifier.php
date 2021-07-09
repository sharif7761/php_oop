<?php

class Base{

    protected $name;

    public function __construct($n)
    {
        $this->name = $n;
    }

    public function show() {
        echo "Name is:".$this->name;
    }
}

class Child extends Base{
    public function get() {
        echo "Name is:".$this->name;
    }
}

$b1 = new Child('sharif');
$b1->get();