<?php
foreach ( count_chars( $str, 1 ) as $strr => $value ) {
    echo chr( $strr ) . " occurred  $value times in the string. \n";
}