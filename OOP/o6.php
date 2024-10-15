<?php

class Bangladesh {
    public static $color = "Green";
    static function Name() {
        echo "Bangladesh is green";
    }
}
class Dhaka extends Bangladesh {

}

Dhaka::Name();