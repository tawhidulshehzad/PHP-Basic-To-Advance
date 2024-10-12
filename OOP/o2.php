<?php

class Human {

    public $name;
    function sayHI() {
        echo "Hello\n";
        // $this->sayName();
    }
    function sayName() {
        echo "My name is {$this->name} \n";
    }
}

$h1 = new Human();
$h1->name = "Rubel";
$h1->sayName();