<?php

$numbers = array( 1, 11, 38, 44, 2, 32, 34 );

function square( $n ) {
    printf( "square of %d is %d \n", $n, $n * $n );
}

array_walk( $numbers, 'square' );

function cube( $n ) {
    return $n * $n * $n;
}

function even( $n ) {
    return $n % 2 == 0;
}

// $newArray = array_map( 'cube', $numbers );
$newArray = array_filter( $numbers, 'even' );

print_r( $numbers );
print_r( $newArray );

$someName = array( 'kader', 'obaidul', 'palak', 'samamim' );

function filterByS( $name ) {
    return $name[0] == 's';
}

$student = array_filter( $someName, 'filterByS' );
print_r( $student );