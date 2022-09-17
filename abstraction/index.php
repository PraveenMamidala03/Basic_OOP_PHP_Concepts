<?php
//abstraction
/*
->abstract class could not create object
->abstract class must declare abstrat function but not implement
->abstract class contain atleast 1 abstract function
->abstract class ,child class must contain abstract function

*/

abstract class bank{
    abstract function test();
}
class sbi extends bank{

    function test(){
        echo 'Hello'.'<br>';
    }

    }
class hdfc extends bank{

    function test(){
        echo 'Hello'.'<br>';
    }

}
//its shows error
//$obj=new class1();

$obj1=new sbi();
$obj1->test();
$obj2=new hdfc();
$obj2->test();









?>