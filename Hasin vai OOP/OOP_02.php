<?php

class Human {
    public $name;

    function __construct( $name ) {
        // echo "New human object is created \n";
        $this->name = $name;
    }
    function SayHI() {
        echo "ASsalam \n";
        $this->sayName();

    }
    function sayName() {
        echo "This is {$this->name} \n";
    }
}

$humanObject = new Human( "Rubel" );
$humanObject->SayHI();
$humanObject02 = new Human( "Shamim" );
$humanObject02 -> SayHI();