<?php

class Human {

    public $name;

    function __construct( $name ) {
        // echo "new object is created";
        $this->name = $name;
    }
    function sayHI() {
        // echo "Hello\n";
        $this->sayName();
    }
    function sayName() {
        // echo "My name is {$this->name} \n";
    }
}

$h1 = new Human( "Rubel" );
$h1->sayHI();

class Car {
    // public $color = "red";
    public static $color = "red";
    static function drive() {
        // function drive() {
        echo " Hello how are you";
    }
}

$carObj = new Car();
echo $carObj->color;
$carObj->drive();

echo Car::$color;
Car::drive();