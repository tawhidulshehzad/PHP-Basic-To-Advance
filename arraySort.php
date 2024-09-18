<?php

// $fruits = array( 'apple', 'orange', 'mango', 'banana', 'plum', 'dates' );
// sort($fruits, SORT_STRING | SORT_FLAG_CASE );
// sort($fruits);
// $fruits = array( 'apple', "f" => 'orange', 'mango', "g" => 'banana', 'plum', 'dates' );
// asort( $fruits );

// ksort($fruits);
$numbers = array( 12, 22, 4, 5, 58, 88, 55 );
arsort( $numbers );
// rsort($numbers)
// print_r( $numbers );

for ( $i = 0; $i < count( $numbers ); $i++ ) {
    echo $numbers[$i] . "\n";
}

echo " ========= \n"; 

foreach ( $numbers as $number ) {

    echo $number . "\n";
}