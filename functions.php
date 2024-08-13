<?php

function evenOrodd( $n ) {
    if ( $n % 2 == 0 ) {
        return true;
    } else {
        return false;
    }

}

$x = 12;
if ( evenOrodd( $x ) ) {
    echo "{$x} is an even number";
} else {
    echo "{$x} is an odd number";
}