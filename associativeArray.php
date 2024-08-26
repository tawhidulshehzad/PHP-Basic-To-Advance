<?php

$students = [
    '12' => 'hasan',
    '13' => 'karin',
    '14' => 'jalal',
];
echo "======== \n";
$food = [
    'vegitable' => 'hasan, brinjal, brocoli, carrot, capsicam',
    'fruit'     => 'orange, banana, apple,',
    'drink'     => 'water, milk',
];
$food['drink'] = $food['drink'] . ", orange juice";

echo $food['drink'];

foreach ( $food as $key => $value ) {
    echo $key . " = " . $value . "\n";
}
echo "======== \n";

$keys = array_keys( $food );
print_r( $keys );
echo "======== \n";
echo $keys[0];

$team = ( 'dhaka, jessore, khulna' );
$newTeam = explode( ', ', $team );
print_r( $newTeam );
// To separate "explode"
// To combine "Join"
// preg_split for joining with space or without space

echo "======== \n";

$student = [
    'fname' => 'jamal',
    'lname' => 'ahmed',
    'age'   => '15',
    'class' => 9,
];
print_r( $student );

echo $student['fname'] . " " . $student['lname'] . "\n";
printf( "%s %s \n", $student['fname'], $student['lname'] );

echo "======== \n";

$serialized = serialize( $student );

$newStudent = unserialize( $serialized );
print_r( $newStudent );

echo "======== \n";

$jsonFirst = json_encode( $student );
echo $jsonFirst;

echo "\n======== \n";

$studentWe = json_decode( $jsonFirst, true );
//we use true to get an array, without true we will get an object;



print_r( $student );
