<?php 
    $subject = 'rapidstars97@gmail.com';
    $pattern = '#^[A-z][A-z0-9_\.]{4,32}@[a-z0-9]{2,}(\.[A-z0-9]{2,4}){1,2}$#';
    if (preg_match($pattern,$subject)){
        echo 'Email Vaild';
    }
    else{
        echo 'Email Invalid';
    };
    echo '<br />';

    function checkEmail($value){
        $pattern = '#^[A-z][A-z0-9_\.]{4,31}@[a-z0-9]{2,}(\.[A-z0-9]{2,4}){1,2}$#';
        $flag = false;
        if (preg_match($pattern,$value)) $flag = true;
        return $flag;
    }
    echo checkEmail('dinhcanhng303@gmail.com');
    echo '<br />';
    function checkUserName($value){
        $pattern = '#^[A-z][A-z0-9_\.]{4,31}$#';
        $flag = false;
        if(preg_match($pattern,$value)) $flag = true;
        return $flag;
    }
    $subject = 'DinhCanh_303';
    echo checkUserName($subject);
    echo '<br />';
    function checkPassword($value){
        $pattern = '#^(?=.*\d)(?=.*[A-Z])(?=.*\W).{8,}$#';
        $flag = false;
        if(preg_match($pattern,$value)) $flag = true;
        return $flag;
    }
    $subject = 'Abcdefgh-1997';
    echo checkPassword($subject);
    echo '<br />';
    function checkWebsite($value){
        $pattern = '#^(https:\/\/?(www\.)?|www\.|[a-z]{0,20})[a-z0-9]{0,20}(\.[a-z0-9]{2,4}){1,2}$#';
        $flag = false;
        if(preg_match($pattern,$value)) $flag = true;
        return $flag;
    }
    $subject = 'https://regex101.com';
    echo checkWebsite($subject);