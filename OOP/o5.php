<?php

class Toyota {
    function __construct() {
        echo "i am constructing form bangladesh parent ";
    }
}

class Prius extends Toyota {
    function __construct() {
        parent::__construct();
        echo "\n i am constructing form bangladesh child ";
    }
}

$pirusObj = new Prius();

// $ToyotaObj = new Toyota();
// $pirusObj->Students();