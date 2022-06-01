<?php 
    $subject = 'Ngo Dinh Canh learning /PHP/';
    $pattern = '#/PHP/#';
    $pattern = '/\/PHP\//';
    if (preg_match($pattern,$subject,$match)){
        echo 'Yes';
    }
    else{
        echo 'No';
    };
    echo '<br />';
    print_r($match);