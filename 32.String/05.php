<?php 
    $str = 'My name is "CanhNgo"';
    $str = addcslashes($str,'C');
    echo $str;
    echo '<br />';
    $str = 'My name is "CanhNgo"';
    $str = addslashes($str);
    echo $str;
    echo '<br />';
    $str1 = stripslashes($str);
    echo $str1;
    echo '<br />';
    $str = 'My name is "CanhNgo"';
    $array = explode(' ', $str);
    print_r($array);
    echo '<br />';
    $str = implode(' ', $array);
    echo $str;