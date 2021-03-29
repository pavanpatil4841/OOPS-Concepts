<?php 
   
    class Employee{

        public $name = "manish";
        private $salary = 12000;
        private $grade = 3;

        function setSalary($salary){
            $this->salary = $salary; 
        }

        function getSalary(){ 
            echo "The salary of employee is $this->name is $this->salary <br>";
        }

        function showName(){
            echo "The name of this employee is $this->name <br>";
        }
    }

    // Inheriting a new class Programmer from Employee
    class Programmer extends Employee{
        private $language = "php";

        function changeLanguage($lang)
        { 
        }
    }

    $rohan = new Employee();
    $rohan->name = "Rohan";
    $rohan->setSalary(100);
    $rohan->getSalary();
    $rohan->showName();

    $shubham = new Employee();
    $shubham->name = "Shubham";
    $shubham->setSalary(10000000);
    $shubham->getSalary();
    $shubham->showName();

    $pavan = new Programmer();
    $pavan->name = "Pavan";
    echo $pavan->changeLanguage("PHP");
    $pavan->getSalary();
    $pavan->showName();

?>