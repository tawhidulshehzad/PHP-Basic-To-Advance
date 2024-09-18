<?php

$numbers = array( 1, 11, 34, 443, 2, 345, 3423 );
$numbers2 = array( 24, 118, 344, 9443, 2, 345, 3423 );

$arryCommon = array_intersect( $numbers, $numbers2 );
print_r( $arryCommon );

$fruits = array( 'a' => 'applee', 'b' => 'bananat', 'g' => 'plum', 'd' => 'dates' );
$fruits2 = array( 'a' => 'apple', 'b' => 'banana', 'c' => 'plum', 'd' => 'dates' );

// to check keys in array we use assoc
$arryCommon2 = array_intersect_assoc( $fruits, $fruits2 );
print_r( $arryCommon2 );

// to check keys in array we use assoc like array_diff_assoc
$diff = array_diff( $numbers, $numbers2 );
print_r( $diff );