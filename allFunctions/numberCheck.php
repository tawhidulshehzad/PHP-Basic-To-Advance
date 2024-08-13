<?php
function isEven( $n ) {
    if ( $n % 2 == 0 ) {
        return true;
    }
    return false;

}

function factorial( int $n ) {
    // if ( gettype( $n ) != "integer" ) {
    //     return "invalid";
    // }
    $result = 1;
    for ( $i = $n; $i > 1; $i-- ) {
        $result *= $i;
    }
    return $result;
}

function sum( int $x, int $y ): int {
    return $x + $y;
}