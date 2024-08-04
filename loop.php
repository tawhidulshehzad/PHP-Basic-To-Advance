<?php
for ( $i = 0; $i <= 5; $i++ ) {
    // echo "{$i}";
    echo PHP_EOL;
    for ( $j = 0; $j < $i; $j++ ) {
        echo "*";
    }
}
// go to
echo PHP_EOL;

$i = 0;
a: $i++;
echo $i . PHP_EOL;
if ( $i < 5 ) {
    goto a;
}
