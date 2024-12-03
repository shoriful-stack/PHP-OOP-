<?php 
class DivisionCollection implements IteratorAggregate, Countable{
    private $divisions;
    public function __construct(){
        $this-> divisions = array();
    }

    function addDivision($division){
        return array_push($this-> divisions, $division);
    }
    function getIterator(): Traversable{
        return new ArrayIterator($this-> divisions);
    }
    function count(): int{
        return count($this-> divisions);
    }
}
$divisions = new DivisionCollection();
$divisions-> addDivision("Dhaka");
$divisions->addDivision("Chittagong");
$divisions->addDivision("Khulna");

foreach($divisions as $division){
    echo $division. "\n";
}

echo count($divisions);
