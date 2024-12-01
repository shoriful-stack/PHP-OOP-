<?php 
class Father {

    // child can override the parents methods
    public $num1 = 10;
    public $num2 = 20;

    public function addTwo(){
        return $this-> num1 + $this->num2;
    }
}

class Son extends Father{
    public function addTwo()
    {
        echo $this->num1 * $this->num2;
    }
}
$objSon = new Son();
$objSon -> addTwo();