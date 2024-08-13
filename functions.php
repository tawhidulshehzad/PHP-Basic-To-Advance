<?php

include_once "allFunctions/numberCheck.php";

$x = 13;
if ( isEven( $x ) ) {
    echo "{$x} is an even number";
} else {
    echo "{$x} is an odd number";
}

echo "\n" . '==========' . "\n" . PHP_EOL;

$x = 4;
echo "factorial of {$x} is " . factorial( $x );