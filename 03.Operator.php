<?php
    $x =2 ; 
    $y = -$x +2;
    $a = 10;
    $b = $a %2;
    $x *= 5; 
    $var = 1;
    $result = (is_string($var)) ? "String" : "No String";
    $number = -12;
    $result1 = (is_numeric($number) && ($number >= 0)) ? "Positive Numbers ":"Negative Numbers ";
echo $result1;