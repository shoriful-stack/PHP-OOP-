<?php 
// late binding
class Planet {
    static function echoName(){
        echo static:: getName();
    }
    static function getName(){
        echo "Planet \n";
    }
}

class Earth extends Planet{
    static function getName(){
        echo "Earth \n";
    }
}
Earth::echoName();

// early binding
class Planet1 {
    static function echoName(){
        echo self::getName();
    }
    static function getName(){
        echo "Planet1 \n";
    }
}

class Earth1 extends Planet1{
    static function getName(){
        echo "Earth1";
    }
}

Earth1::echoName();