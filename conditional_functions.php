<?php

interface myInterface{

}

class myClass{

}

if(class_exists('myClass')){
    echo "Class exits <br>";
} else {
    echo "Class not exits <br>";
}

if(interface_exists('myInterface')){
    echo "interface exits <br>";
} else {
    echo "interface not exits <br>";
}

// same way method_exists(), trait_exists(), property_exists(),
// is_a() (object check),  is_subclass_of