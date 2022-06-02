<?php 
    $value = 23.02;

    if(!filter_var($value,FILTER_VALIDATE_FLOAT)){
        echo 'No Float';
    }
    else echo 'Float';