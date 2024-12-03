<?php
// method overloading called as any name
class Overloading {
    public function __call ($name, $arguments){
        print_r($arguments);
    }
}
$obj = new Overloading();
$obj -> jorina("Alif");
