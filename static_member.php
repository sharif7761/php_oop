<?php

class Base{
    public static $name = "Sharif";

    public static function show(){
        echo self::$name;
    }

    public function __construct(){
        self::show();
    }
}

class Derived extends Base {
    public static function show()
    {
        parent::show();
    }
}

echo "static variable: ".Base::$name;
echo "<br> static Method: ";
Base::show();
echo "<br> Calling Object constructor: ";
$b1 = new Base();
echo "<br> Calling object method: ";
$b1->Show();

echo "<br> Calling From derived class constructor: ";
$d1 = new Derived();
echo "<br> Calling From derived class method: ";
$d1->show();
