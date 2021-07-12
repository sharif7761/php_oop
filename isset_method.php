<?php

class student{

    public $course;
    private $fname;
    private $lname;

    public function setName($fname, $lname){
        $this->fname = $fname;
        $this->lname = $lname;
    }
    public function __isset($property)
    {
        echo isset($this->$property);
    }

}

$stu = new student();
$stu->setName('Sharif', 'Ahmed');
echo isset($stu->fname);

