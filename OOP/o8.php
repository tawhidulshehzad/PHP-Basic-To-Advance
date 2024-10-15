<?php

class Toyota {
  // we can use final keyword to make the function fixed 
    function Students() {
        echo " we want justice";
    }
}

class Prius extends Toyota {
    function Students() {
        echo " we want justice justice justice";
    }
}

$pirusObj = new Prius();

$ToyotaObj = new Toyota();
// $ToyotaObj->Students();
$pirusObj->Students();