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

function iSum( int ...$n ): int {
    $result = 0;
    for ( $i = 0; $i < count( $n ); $i++ ) {
        $result += $n[$i];
    }
    return $result;
}

function fibonacci( $old, $new, $end ) {

    static $start;
    $start = $start ?? 1;

    if ( $start > $end ) {
        return;
    }
    $start++;
    echo $old . " ";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;
    fibonacci( $old, $new, $end );

}