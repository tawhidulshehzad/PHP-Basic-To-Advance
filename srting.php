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

echo substr( $string, -3);