<?php

class ABC{
    private $conn;
    public function __construct()
    {
        $this->conn = true;
        echo "Constructor <br>";
    }

    public function hello() {
        echo "Hello Function <br>";
    }

    public function __destruct()
    {
        $this->conn = false;
        echo "Destructor <br>";
    }
}

$a = new ABC();
$a->hello();
$a->hello();
$a->hello();