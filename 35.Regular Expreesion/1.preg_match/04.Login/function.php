<?php 
    function checkEmail($value){
        $pattern = '#^[A-z][A-z0-9_\.]{4,31}@[a-z0-9]{2,}(\.[A-z0-9]{2,4}){1,2}$#';
        $flag = false;
        if (preg_match($pattern,$value)) $flag = true;
        return $flag;
    }
    function checkUserName($value){
        $pattern = '#^[A-z][A-z0-9_\.]{4,31}$#';
        $flag = false;
        if(preg_match($pattern,$value)) $flag = true;
        return $flag;
    }
    function checkPassword($value){
        $pattern = '#^(?=.*\d)(?=.*[A-Z])(?=.*\W).{8,}$#';
        $flag = false;
        if(preg_match($pattern,$value)) $flag = true;
        return $flag;
    }
    function checkWebsite($value){
        $pattern = '#^(https:\/\/?(www\.)?|www\.|[a-z]{0,20})[a-z0-9]{0,20}(\.[a-z0-9]{2,4}){1,2}$#';
        $flag = false;
        if(preg_match($pattern,$value)) $flag = true;
        return $flag;
    }
    function checkInput($value,$type='email'){
        switch($type){
            case 'email':
                $pattern = '#^[A-z][A-z0-9_\.]{4,31}@[a-z0-9]{2,}(\.[A-z0-9]{2,4}){1,2}$#';
                break;
            case 'username':
                $pattern = '#^[A-z][A-z0-9_\.]{4,31}$#';
                break;
            case 'password':
                $pattern = '#^(?=.*\d)(?=.*[A-Z])(?=.*\W).{8,}$#';
                break;
            case 'website':
                $pattern ='#^(https:\/\/?(www\.)?|www\.|[a-z]{0,20})[a-z0-9]{0,20}(\.[a-z0-9]{2,4}){1,2}$#';
                break;
        }
        $flag = false;
        if(preg_match($pattern,$value)) $flag = true;
        return $flag;
    }