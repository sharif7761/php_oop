<?php

//require 'first.php';
//require 'second.php';


// add all files together
function __autoload($class){
    require $class.".php";
}

$f1 = new First();
$f1->sayHello();
$s1 = new Second();