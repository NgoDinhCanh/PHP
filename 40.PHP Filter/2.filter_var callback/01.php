<?php 
    $value = 'Nguyen Van A';
    function convertString($string) {
        $string = str_replace(' ','-', $string);
        return $string;
    }
    echo filter_var($value,FILTER_CALLBACK,array('options' => 'convertString'));