<?php
class Employee{
    private $name = "pavan";
    function show(){
        echo "$this->name";
    }

    }
   $pavan = new Employee();
   $pavan->show();
   ?>