<?php
$name = "Rakib";

$string01 = "My name is $name";

// echo $string01;

$heredoc = <<<EOD
data1
data2 {$name}
data3
EOD;
echo $heredoc;
echo "\n";
echo ord('A');