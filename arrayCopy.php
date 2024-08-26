<?php

$person = array( 'first_name' => 'hello', 'last_name' => 'world' );
$newPerson = $person;
// $newPerson = &$person; it's not a new array, just a reference and the first name won't be changed
$newPerson['first_name'] = 'John';

print_r( $person );
print_r( $newPerson );

echo("---------------- \n");

function printPerson( $person ) {
    $person['first_name'] = 'changed';
    print_r( $person );
};

printPerson( $person );
print_r( $person );