<?php

class MyClass {
    // public $color = "red";
    protected $color = "red";
    function MyFunction() {
        echo "$this->color";
    }
}
class YourClass extends MyClass {
    function YourFunction() {
        echo "$this->color";
    }
}

$MyObject = new MyClass();
// echo "$MyObject->"color";