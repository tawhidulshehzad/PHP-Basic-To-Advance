<?php

$string = "lorem ipsum dolor sit amet, consectetur adip lorem sit am lorem fgadfasdfasdfasdfasdfsdfsd ";
echo wordwrap( $string, 15, "\n", true );
// echo wordwrap( $string, 15, "<br />", true ); for web page

$string02 = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum excepturi minima ab quam vel, exercitationem recusandae magni iste quasi eos.";

// echo nl2br( $string ); to see line breaks on web page with

echo $string;

$name = "abul hossain 0178514265";
$parts = sscanf( $name, "%s %s %11s" );

print_r( $parts );

sscanf( $name, "%s %s %11s", $fname, $lname, $mobile );

echo $fname;