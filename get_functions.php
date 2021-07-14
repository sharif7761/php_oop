<?php

class xyz{

}

class myClass extends xyz {
    function name(){
        echo "Class Name: " .get_class($this). "<br>";
        echo "Parent Class Name: " .get_parent_class($this). "<br>";
    }
}

$obj = new myClass();
$obj->name();

echo "Class Name: " .get_class($obj). "<br>";
echo "Parent Class Name: " .get_parent_class($obj). "<br>";

// same as get_class_methods(), get_class_vars(), get_called_class(), get_declared_classes(),
//    get_declared_interfaces(), get_declared_traits()

// to rename a class and make object class_alias()