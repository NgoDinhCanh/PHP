<?php 
    $value = '0937241362';
    $options = array('options' => array('regexp' => '#^[0-9]{10}$#'));
    if(!filter_var($value, FILTER_VALIDATE_REGEXP,$options)){
        echo 'NO';
    }else echo 'YES';