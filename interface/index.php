<?php
/*interface 
->it contain only abstract function
->in interface we cant declare variable
->no constractor in interface
->all function must be public
->it supports multiple inheretance
*/
interface class1{
    public function test1();
}
interface class2{
    public function test2();
}
class class3 implements class1,class2{
    public function test1(){
        echo 'Hello'.'<br>';
    }
    public function test2(){
        echo 'Welcome'.'<br>';
    }

}
$obj=new class3();

$obj->test1();
$obj->test2();









?>