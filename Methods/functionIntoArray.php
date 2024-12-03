<?php 
// normal usage
class DivisionCollection {
    private $divisions;
    public function __construct(){
        $this->divisions = array();
    }
    function addDivision($division){
        array_push($this->divisions, $division);
    }
    function getDivision(){
        return $this->divisions;
    }
}

$divisions = new DivisionCollection();
$divisions-> addDivision("Dhaka");
$divisions->addDivision("Chittagong");
$divisions->addDivision("Khulna");

$_divisions = $divisions->getDivision() ;
// print_r($_divisions);

class DivisionCollection2 implements IteratorAggregate{
    private $divisions2;
    function __construct(){
        $this-> divisions2 = array();
    }
    function addDivision2($division2){
        array_push($this->divisions2, $division2);
    }

    function getIterator(): Traversable{
        return new ArrayIterator($this->divisions2);
    }
}

$divisions2 = new DivisionCollection2();
$divisions2-> addDivision2("Dhaka");
$divisions2->addDivision2("Chittagong");
$divisions2->addDivision2("Khulna");

foreach($divisions2 as $division2){
    echo $division2. "\n";
}