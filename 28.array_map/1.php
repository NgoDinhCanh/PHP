<?php 
    $array1 = array(2,3,1); 
    $array2 = array(1,2,3); 
    function checkNumber($number){
        $result = ($number % 2 == 0) ? 'Even' : 'Odd';
        return $result;
    }
    function myFunction($n1,$n2){
        $result = $n1 * $n2 ;
        return $result;
    }

    $newArray1 = array_map('checkNumber', $array1);
    $newArray2 = array_map('myFunction', $array1,$array2);


    echo "<pre>";
    echo print_r($newArray2);
    echo "</pre>";