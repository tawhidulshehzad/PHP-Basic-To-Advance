<?php

$string = "hello  world";

$parts = preg_split( "/\s+/", $string );
// echo $parts;

print_r($parts);

