<?php

$fNumber = 0;
$sNumber = 1;
$theNumber = 1;

for ( $i = 0; $i < 10; $i++ ) {
    echo $fNumber . " ";
    $sNumber = $theNumber;
    $theNumber = $fNumber + $sNumber;
    $fNumber = $sNumber;
}


