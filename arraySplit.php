<?php

$fruits = array( 'apple', 'orange', 'mango', 'banana', 'plum', 'dates' );
// $someFruits = array_slice( $fruits, 2 );
// $someFruits = array_slice( $fruits, 2, 2 );
// $someFruits = array_slice( $fruits, 2, -1 );
// $someFruits = array_slice( $fruits, 2, 2, true );
print_r( $someFruits );

$random = [
    'a' => 12,
    'b' => 13,
    'c' => 14,
    'd' => 15,
    'e' => 16,
    21  => 85,
];
// $randomData = array_slice( $random, 3 );
$randomData = array_slice( $random, 3, null, true );
print_r( $randomData );