<?php

abstract class Bangladesh {
    public $color = "Green";
    function Name() {
        echo "Bangladesh is green";
    }
}
class Dhaka extends Bangladesh {

}

// $bangladeshObj = new Bangladesh();
// $bangladeshObj-> Name();
$dhakaObj = new Dhaka();
$dhakaObj->Name(); 
