<?php 
    $value = 2;
    function checkNumber($number) {
        $flag = false;
        if($number % 2 ==0) $flag = true;
        return $flag;
    }
    if(!filter_var($value,FILTER_CALLBACK,array('options' => 'checkNumber'))){
        echo 'Odd';
    }else echo 'Even';