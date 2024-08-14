<?php

$students = [
    '12' => 'hasan',
    '13' => 'karin',
    '14' => 'jalal',
];

$food = [
    'vegitable' => 'hasan,brinjal, brocoli, carrot, capsicam',
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