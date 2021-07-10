<?php

function sum(int $v)  // if any type of value other than int is passed it will stop the code starting of the function
{
    echo $v + 10;
}

function fruits(array $names) {
    foreach ($names as $name){
        echo $name."<br>";
    }
}

$fruit_name = ['Mango', 'Banana', "Orange"];
fruits($fruit_name);
sum(15);

