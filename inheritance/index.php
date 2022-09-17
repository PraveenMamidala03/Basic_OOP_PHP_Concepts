<?php
/*Inheritance in OOP = When a class derives from another class.
The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.
An inherited class is defined by using the extends keyword */

//example 

//parent class
class class1{
    function __construct(){
        echo "Constructor 1".'<br>';
        $this->num=1;
    }
    function fun(){
        echo "Function".'<br>';
    }
    function fun1(){
        echo "Function 1".'<br>';
    }
}
//child class
class class2 extends class1 {
    function __construct(){
        echo "Constructor 2".'<br>';
        parent::__construct();
        $this->num=2;
    }
    
    function fun2(){
        //parent method accessing
        return $this->fun1();
    }
}

$obj=new class2();
//we acccess parent methods
$obj->fun();
$obj->fun2();

//its shows the child class variable
echo $obj->num;
?>