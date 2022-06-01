<?php 
    $subject = 'Ngo Dinh Canh learning PHP and PHP and PHP';
    $pattern = '/PHP/';
    if (preg_match_all($pattern,$subject,$match)){
        echo 'Yes';
    }
    else{
        echo 'No';
    };
    echo '<br />';
    echo '<pre>';
    print_r($match);
    echo '</pre>';