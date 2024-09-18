<?php

$fruits = array( 'apple', 'orange', 'mango', 'banana', 'plum', 'dates' );

$newFruits = array_slice( $fruits, 0, 3 );
$newFruits2 = array_slice( $fruits, 3, null, true );

$finalArray = array_merge( $newFruits, $newFruits2 );
print_r( $newFruits );
print_r( $newFruits2 );
print_r( $finalArray );

// $newFruitsPlus = $newFruits + $newFruits2;
// print_r( $newFruitsPlus );

$randomData = array_splice( $fruits, 1, 3, array( 'j' => 45, 'k' => 12 ) );
// print_r( $randomData );
// echo ( "\nfruits \n" );
// print_r( $fruits );