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

class Cat {
    function sayHI() {
        echo "Hello \n";
    }
}

class Dog {
    function sayHI() {
        echo "Hello\n";
    }
}

$h1 = new Human;

$h1->name = "Rubel";
$c1 = new Cat;
$d1 = new Dog;

$h1->sayHI();
$h1->sayName();
echo $h1->name;