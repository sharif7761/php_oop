<?php

trait Hello
{
    public function sayHello()
    {
        echo "Hello from Hello-Trait \n";
    }
}

trait Hi
{
    public function sayHello()
    {
        echo "Hello from Hi-Trait \n";
    }
}

trait private_Bye
{
    private function sayBye()
    {
        echo "Bye everyone";
    }
}


class Base {
    use Hello;

    public function sayHello()
    {
        echo "Hello from Base class\n";
    }
}

class Child extends Base {
    use Hello;

    public function sayHello()
    {
        echo "Hello from Child class\n";
    }
}

class Multiple {
    use Hello, Hi{
        Hello::sayHello insteadof Hi; // use the Hi trait expect the sayHello function of Hi trait
        Hi::sayHello as newHello; // rename the sayHello function of Hi trait to use it
    }
}

class ChangeAccess {
    use private_Bye{
        private_Bye::sayBye as public; // change private to public to use it in object
       // private_Bye::sayBye as public newBye; // change private and name to public to use it in object
    }
}

// priority 1: function in self class
// priority 2: function in trait
// priority 3: function from parent class


$b1 = new Base();
$b1->sayHello();
echo "<br>";
$c1 = new Child();
$c1->sayHello();
echo "<br>";
$m1 = new Multiple();
$m1->sayHello();
echo "<br>";
$m1->newHello();
echo "<br>";
$ca1 = new ChangeAccess();
$ca1->sayBye();



