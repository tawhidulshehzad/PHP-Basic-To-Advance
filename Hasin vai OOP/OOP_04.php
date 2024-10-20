<?php

// ff0000 255,0,0

class RGB {
    private $color;
    private $red;
    private $green;
    private $blue;
    function __construct( $coloCode = '' ) {
        $this->color = ltrim( $coloCode, '#' );
        $this->parseColor();
    }

    private function parseColor() {
        if ( $this->color ) {
            list( $this->red, $this->green, $this->blue ) = sscanf( $this->color, "%02x%02x%02x" );
            echo "red = {$this->red} \ngreen = {$this->green} \nblue = {$this->blue}";
        }

    }
}

$myColor = new RGB( "#ffef27" );