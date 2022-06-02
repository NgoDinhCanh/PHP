<?php 
    $value = 23;

    $int_options = array('options' => array('min_range' => 0,'max_range' =>10));
    if(!filter_var($value,FILTER_VALIDATE_INT,$int_options)){
        echo 'No INT';
    }
    else echo 'INT';