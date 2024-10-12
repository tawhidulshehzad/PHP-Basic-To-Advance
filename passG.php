<?php

function passwordGenerator( $lowerCase, $upperCase, $symbols, $numbers, $limit ) {
    $passWord = "";
    if ( $lowerCase === true ) {
        $lowerCase = "abcdefghijklmnopqrstuvwxyz";
        $passWord .= $lowerCase;
    }
    if ( $upperCase === true ) {
        $upperCase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $passWord .= $upperCase;
    }
    if ( $numbers == true ) {
        $numbers = "0123456789";
        $numbers .= $numbers;
    }
    if ( $symbols === true ) {
        $symbols = "!@# $ % ^ & * ( ) - _ = + \" | [ ] { } ; : / ? . >";
        $symbols = str_replace( " ", "", $symbols );
        $passWord .= $symbols;
    }
    $shuffle = str_shuffle( $passWord );
    $trimPass = substr( $shuffle, 0, $limit );
    return $trimPass;
}

$getThePassword = passwordGenerator( true, true, true, true, 10 );

echo $getThePassword;