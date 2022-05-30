<?php 
    $arrNumber = array(1,-3,8.5,8.51,4,9);
    sort($arrNumber);
    $total = 0;

    foreach ($arrNumber as $value){
        $total += $value;
    }
    
    echo "<pre>";print_r($arrNumber);echo "</pre>";

    $min = $arrNumber[0];

    echo $min . "<br/>";
    echo $max = $arrNumber[count($arrNumber)-1] . "<br/>";
    echo $total;