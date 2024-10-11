<?php

$str1 = '  hello';
// $str2 = 'bangladesh';
$str1 = strtolower( $str1 );

// $strLeanth = strlen( $str1 );

// echo strrev( $str1 );

// echo str_shuffle( $str1 );
// echo ucfirst( $str1 );
// echo "\n";
// echo ucwords( $str1 );

$str2 = explode( ".", $str1 );
// print_r( $str2 );
$fixed = "";
// $finalStr = " ";

// foreach ( $str2 as $item ) {

//     $fixed = ucfirst( trim( $item ) );

//     // echo "\n";
//     // print_r( $fixed );
// }
// print_r( $fixed );
// $finalStr = join( " .", $fixed );
// echo $finalStr;

for ( $i = 0; $i < count( $str2 ); $i++ ) {
    // print_r( $str2[$i] );
    $str2[$i] = ucfirst( trim( $str2[$i] ) );

}
$fixed = join( ". ", $str2 );
// echo $fixed;

$str1 = rtrim( $str1 );
// echo $str1;

$newStr = "abdul  karim is gooda boy. he  can run..so fast";

$fixedNamde = str_replace( ["  ", ".."], [" ", " "], $newStr );
// echo $fixedNamde;

echo substr( $newStr, 5, 10 );