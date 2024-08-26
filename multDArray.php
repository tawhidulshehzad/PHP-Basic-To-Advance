<?php

$food = [
    'vegitable' => explode( ', ', 'hasan, brinjal, brocoli, carrot, capsicam' ),
    'fruit'     => explode( ', ', 'orange, banana, apple,' ),
    'drink'     => 'water, milk',
];

// print_r( $food );

// array_push( $food['fruit'], 'orange' );
// print_r( $food );

$sample = [
    ['samim', 'kamal,', 'shakil'],
    ['kader', 'obaidul', 'palak'],
    ['monira', 'jamiha', ['munmun', 'rheana']],
];

$sample2 = [
    [1, 2, 3],
    [11, 22, 33, [9, 5]],
];

// print_r( $sample );
echo $sample[1][0];

