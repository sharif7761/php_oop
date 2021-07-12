<?php

class ABC{
    private $fname;
    private function setName($name){
        $this->fname = $name;
    }

    public function __call($method, $args){
        if(method_exists($this, $method)){
            call_user_func_array([$this, $method], $args);
        } else{
            echo "Method does not exists ($method)";

        }
    }
}

$a = new ABC();
$a->setName('Sharif');
$a->setNames('Sharif');
print_r($a);
