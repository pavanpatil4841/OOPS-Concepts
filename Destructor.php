<?php
    class Employee{
      
        public $name;
        public $salary;

       
        function __construct($name1, $salary1){
            $this->name = $name1;
            $this->salary = $salary1;

        }
       
       // Destructor
       function __destruct(){
        echo "I am destructing $this->name <br>";
    }
    }

    $rohan = new Employee("Rohan", 73000);
    $pavan = new Employee("Pavan", 10000);
    

    echo "The salary of pavan is $pavan->salary <br>";
    echo "The salary of rohan is $rohan->salary";
?>