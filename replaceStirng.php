<?php

$string = "Quick brown fox jumps over the lazy dog";
// $replaceString = str_ireplace( "fox", 'Fox', $string );
$replaceString = str_replace( "fox", 'Fox', $string, $count );

echo $replaceString;
PHP_EOL;

echo "total replacements : {$count}";