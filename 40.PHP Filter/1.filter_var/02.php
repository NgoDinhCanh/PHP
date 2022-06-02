<?php 
    $email = 'ngodinhcanh97@gmail.com';

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo 'No Email';
    }
    else echo 'Email';