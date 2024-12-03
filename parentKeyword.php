<?php 

// usage of parent keyword(child class can request for parents class behave(also constructor))
class Father {
    public $num1 = 10;
    public $num2 = 20;

    public function addTwo(){
        // problem faced = without return i was searching for addTwo function on son class
        return $this-> num1 + $this->num2;
    }
}

class Son extends Father{
    public function mulTwo(){
        $abba = parent::addTwo();
        echo $abba * 30;
    }
}
$objSon = new Son();
$objSon -> mulTwo();