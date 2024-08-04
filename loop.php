<?php
for ( $i = 0; $i <= 5; $i++ ) {
    // echo "{$i}";
    echo PHP_EOL;
    for ( $j = 0; $j < $i; $j++ ) {
        echo "*";
    }
}

echo "\n" . 'New line' . "\n" . PHP_EOL;

$i = 0;
a: $i++;
echo $i . PHP_EOL;
if ( $i < 5 ) {
    goto a;
}

echo "\n" . 'New line' . "\n" . PHP_EOL;

for ( $i = 10; $i > 0; $i-- ) {
    echo $i . ":" . ( 10 - $i );
    echo PHP_EOL;
}

echo "\n" . '==========' . "\n" . PHP_EOL;

for ( $i = 10; $i < 50; $i++ ) {
    if ( $i % 13 == 0 ) {
        echo $i . PHP_EOL;
        break;
    }
}
echo "\n" . '==========' . "\n" . PHP_EOL;
for ( $i = 0; $i < 8; $i++ ) {
    if ( $i == 5 ) {
        continue;
    }
    echo $i . PHP_EOL;
}