<?php

class Base {
    protected static $name = "Sharif";

    public function show() {
        echo static::$name; // just use static::$name instead of self::$name
    }
}

class Derived extends Base{
    protected static $name = "Ahmed";
}

echo "Using Base Class variable: ";
$b1 = new Base();
$b1->show();
echo "<br>";
echo "Using Derived Class variable: ";
$d1 = new Derived();
$d1->show();