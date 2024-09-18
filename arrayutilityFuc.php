<?php

$numbers = array( 1, 11, 34, 443, 2, 345, 3423 );

function square($n){
  printf("square of %d is %d \n", $n , $n*$n);
}

array_walk($numbers, 'square');