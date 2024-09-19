<?php
$color = array( 122, 233, 65 );
// $red = $color[0];
// $green = $color[1];
// $blue = $color[2];
// Alternative

list( $red, $green, $blue ) = $color;

echo $red;

$student = array( 'Fname', 'Lname', 'Email', 'Mobile' );

list( $firstName, $lastName, $EmailAddress, $MobileNumber ) = $student;

echo "\n", $firstName;