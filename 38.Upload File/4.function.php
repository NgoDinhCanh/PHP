<?php 
    function checkSize($size,$min,$max){

        $flag = false;
        if($size >=$min && $size <=$max) $flag = true;
        return $flag;
    }
    function checkExtension($fileName,$arrExtension){
        $extension = pathinfo($fileName, PATHINFO_EXTENSION);
        $flag = false;
        if(in_array(strtolower($extension),$arrExtension)) $flag = true;
        return $flag;
    }