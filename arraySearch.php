<?php
$fruits = array( 'a' => 'apple', 'b' => 'banana', 'c' => 'plum', 'd' => 'dates' );
$numbers = array( 1, 11, 34, 443, 2, 345, 3423 );

// if ( in_array( 34, $numbers, true ) )  to check the type we use true
if ( in_array( 34, $numbers ) ) {
    // echo '34 is found';
} else {
    // echo '34 is not found';
}

$offset = array_search( 345, $numbers, true );
// echo "\n" . $offset;

if ( key_exists( 'a', $fruits ) ) {
    // echo "\n a is found";
}
;

