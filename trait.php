<?php

trait Hello
{
    public function sayHello($say)
    {
        echo "Hello from ".$say;
    }

    public function sayHi()
    {
        echo "Hi everyone";
    }
}

trait Bye{
    public function sayBye(){
        echo "Bye everyone";
    }
}

class Base {
    use Hello, Bye;
}

class Child {
    use Hello, Bye;
}

$b1 = new Base();
$b1->sayHello('Base');
echo "<br>";
$b1->sayHi();
echo "<br>";
$c1 = new Child();
$c1->sayHello('Child');
echo "<br>";
$c1->sayBye();