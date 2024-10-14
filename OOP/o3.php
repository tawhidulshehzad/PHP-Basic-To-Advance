<?php

class Car {

    // constructor auto execution
    // constructor Cannot return
    function __construct( $a ) {
        echo "I am constructor {$a}";
    }

}
new Car( 10 );

