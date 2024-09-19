<?php

$numbers = array( 1, 11, 34, 443, 2, 345, 3423 );

function sum( $oldvalue, $newvalue ) {
    return $oldvalue + $newvalue;
}

$sum = array_reduce( $numbers, 'sum' );

echo $sum;
echo "\n", count( $numbers );