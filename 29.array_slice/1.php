<?php 
    $array = array('a','b','c','d','e');

    $newArray = array_slice($array,2);
    $newArray = array_slice($array,2,2);

    echo "<pre>";
    echo print_r($newArray);
    echo "</pre>";