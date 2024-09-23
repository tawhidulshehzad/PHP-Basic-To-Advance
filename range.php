<?php

$numberRange = range( 10, 20 );
// $numberRange = range( 10, 30, 2 );

// print_r( $numberRange );

$numbers = array();

for ( $i = 0; $i < 10; $i++ ) {
    array_push( $numbers, $i );
}
// print_r( $numbers );

foreach ( range( 10, 20, 2 ) as $evenNumber ) {
    // echo "evenNumber: " . $evenNumber . "\n";

}

// pick a random number
$random = mt_rand( 0, 32 );
shuffle( $numberRange );
// print_r( $numberRange );

$fruits = array( 'a' => 'apple', 'b' => 'banana', 'c' => 'plum', 'd' => 'dates' );

shuffle( $fruits );
print_r($fruits);

$key = array_rand( $fruits );
// print_r( $key );
// echo $fruits[$key];
