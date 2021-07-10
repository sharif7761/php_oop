<?php

class Personal {
    public function first(){
        echo "First function <br>";
        return $this;
    }

    public function second(){
        echo "Second function <br>";
        return $this;
    }

    public function third(){
        echo "Third function <br>";
    }
}

$p1 = new Personal();
$p1->first()->second()->third();