<?php 
class Parents {
    private $name;

    private $age;
    private $callName;

    function __construct($name="", $age="", $callName= ""){
        $this->name = $name;
        $this->age = $age;
        $this->callName = $callName;
    }

    // usage of magic method

    function __get($property){
        return strtoupper($this->$property);
    }
    function __set($property, $value){
        $this->$property = $value;
    }

    // usage normal methods
    // public function getName(){
    //     return $this->name;
    // }
    // public function getAge(){
    //     return $this->age;
    // }
    // public function getCallName(){
    //     return $this->callName;
    // }
    // public function setName($name){
    //     $this->name = $name;
    // }
    // public function setAge($age){
    //     $this->age = $age;
    // }
    // public function setCallName($callName){
    //     $this->callName = $callName;
    // }
}

$Baba = new Parents("Jamal", 45, "Babai");
// echo $Baba->getCallName();
$Baba-> name = "Kamal";
echo $Baba->name;