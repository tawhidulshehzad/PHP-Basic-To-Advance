<?php

class Human {
    public $MyName;
    function showName() {
        echo "this is {$this->MyName} \n";
    }

}

$humanObject = new Human();
$humanObject->MyName = "Rakib";
$humanObject->showName();
// echo $humanObject->MyName;
$humanObject02 = new Human();
$humanObject02->MyName = "shamim";
$humanObject02->showName();