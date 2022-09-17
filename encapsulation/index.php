<?php
//encapsulation-
/**encapsulation utilized to make the code more secure and robust. Using encapsulation,
 we are hiding the real implementation of data from the user and also does not allow anyone to manipulate 
 data members except by calling the desired operation */
//public
//protected
//private
class class1{
    public $name;
    protected $num;
    private $string;
    function __construct(){
        $this->name = 'praveen';
        $this->num = 1;
        $this->string = 'm';
    }
    //set
    function getNum(){
        return $this->num;
    }
    
    protected function getData(){
        return "Hello1".'<br>';
    }
    private function getData1(){
        return "Hello1".'<br>';
    }
}

class class2 extends class1{
    //if your extends parent class it have to be public 
    public function getDataprotected(){
        echo $this->getData();
    }
    //we cant use modifier in child class
    protected function getDataP(){
        echo $this->getData();
    }
    //defalut its public
    function getDataprivate(){
        echo $this->getData1();
    }
}


$obj=new class1();
//we access public modifier
echo $obj->name.'<br>';
//we can't access protected modifier its show error
//echo $obj->num.'<br>';
echo $obj->getNum().'<br>';
$obj1=new class2();
echo $obj1->name.'<br>';

$obj1->getDataprotected();
//we can't declare modifier in child class its show error
//$obj1->getData1();
//we can't access private modifier in child classs its show error
//$obj1->getDataprivate();







?>