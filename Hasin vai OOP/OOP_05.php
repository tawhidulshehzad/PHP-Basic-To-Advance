<?php

class parentClass {
    protected $name;
    function __construct( $nameGiven ) {
        $this->name = $nameGiven;
        echo "text \n";
        $this->sayHi();
    }
    function sayHi() {

        echo "Hi {$this->name} \n";
    }

}

class childClass extends parentClass {
    function sayHi() {
        parent::sayHi();
        echo "hello\n";
    }
}

// $callObject = new parentClass( "ABCD" );
$childClassObject = new childClass( "abcd" );