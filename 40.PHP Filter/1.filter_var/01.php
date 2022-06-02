<?php 
    $bool = 'on';

    if(!filter_var($bool,FILTER_VALIDATE_BOOLEAN)){
        echo 'No Boolean';
    }
    else echo 'Boolean';