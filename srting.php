<?php
$name = "Rakib";

// $string01 = "My name is $name";

// echo $string01;

$heredoc = <<<EOD
data1
data2 {$name}
data3
EOD;
// echo $heredoc;
// echo "\n";
// echo ord( 'A' );

echo "\n";

$string = "Hello, world!";
// echo $string[0];
// echo substr( $string, 1 , 3);

$length = strlen( $string );
// echo $length;
// echo substr( $string, $length -3);

// echo substr( $string, -3);
$newString = array();
for ( $i = 0; $i < $length; $i++ ) {
    if ( $string[$i] == " " || $string[$i] == "," ) {
        continue;
    } else {
        array_push( $newString, $string[$i] );
    }

}

// print_r( $newString );
PHP_EOL;
$joinArry = join( $newString );
// echo $joinArry;

// echo strrev($string);

$parts = explode( " ", $string );
// print_r($parts);

$original = join( " ", $parts );
// echo $original;

$parts01 = str_split( $string );
// print_r($parts01);

$parts2 = preg_split( '//', $string, -1, PREG_SPLIT_NO_EMPTY );
// print_r( $parts2 );

$str = 'str ing';
$chars = preg_split( '//', $str, -1, PREG_SPLIT_NO_EMPTY );
// print_r($chars);

$str = "John|Doe,,Jane,Smith";

foreach ( count_chars( $str, 1 ) as $strr => $value ) {
    // echo chr( $strr ) . " occurred  $value times in the string. \n";
}

// $str = "Hello World!";
// echo count_chars($str,mode: 3);

$part03 = strtok( $str, " ," );
while ( $part03 != false ) {
    // echo $part03 . "\n";
    $part03 = strtok( " ," );
}
$string_preg = preg_split( '/([|,]+)/', $str, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE );
// print_r( $string_preg );

// STring search

$StrSch = "Quick brown fox jumps over the lazy dog";
// $offset= stripos($StrSch, "fox", 13);
$offset = stripos( $StrSch, "Quick" );
// strrpos use for count from last

if ( $offset !== false ) {
    echo "\n We found the word";
} else {
    echo "\n Word was not found";
}