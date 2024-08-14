<?php

$n = "12";
$students = array(
    "rahim",
    "karim",
    123,
    "monir",
);


$students[2] = "jakir";

foreach ( $students as $student ) {
    echo $student . "\n";
}

echo "======== \n";

$student = array_pop( $students );

for ( $i = 0; $i < count( $students ); $i++ ) {
    echo $students[$i] . "\n";
}

// array_pop() The last one will be removed
// array_shift() The first one will be removed
// array_push() or students[] (A element will be added at the end)
// array_unshift() (A element will be added at the beginning of the array)

