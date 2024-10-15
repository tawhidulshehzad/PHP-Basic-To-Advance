<?php

class Human {
    public $name;
    public $age;

    function __construct( $name, $age = 0 ) {
        // echo "New human object is created \n";
        $this->name = $name;
        $this->age = $age;
    }
    function SayHI() {
        echo "ASsalam \n";
        $this->sayName();

    }
    function sayName() {
        if ( $this->age ) {
            echo "This is {$this->name}, I am {$this->age} years old \n";
        } else {
            echo "This is {$this->name}";
        }
    }
}

$humanObject = new Human( "Rubel", 10 );
$humanObject->SayHI();
$humanObject02 = new Human( "Shamim" );
$humanObject02->SayHI();