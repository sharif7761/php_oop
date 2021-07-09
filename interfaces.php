<?php

interface ParentSum {
    function sum($a, $b);
}

interface ParentSub {
    function sub($c, $d);
}

class CalcChild implements ParentSum, ParentSub {
    public function sum($a, $b)
    {
        echo "Sum is: ". ($a + $b);
    }

    public function sub($c, $d)
    {
        echo "Sub is: ".($c - $d);
    }
}

$c1 = new CalcChild();
$c1->sum(10, 5);
echo "<br>";
$c1->sub(10, 7);