<?php

class Employee {
    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function show(){
        echo "<h2>Employee Details</h2><br>";
        echo "Name: ". $this->name."<br>";
        echo "Age: ". $this->age."<br>";
        echo "Salary: ". $this->salary."<br>";

    }
}

class Manager extends Employee {
    public $travel = 1000;
    public $phone = 300;
    public $totalSalary;

    public function show(){
        $this->totalSalary = $this->salary + $this->travel + $this->phone;
        echo "<h2>Manager Details</h2><br>";
        echo "Name: ". $this->name."<br>";
        echo "Age: ". $this->age."<br>";
        echo "Salary: ". $this->totalSalary."<br>";

    }
}

$e1 = new Employee('Sharif', 24, 18000);
$e1->show();

$m1 = new Manager('Ahmed', 24, 18000);
$m1->show();
