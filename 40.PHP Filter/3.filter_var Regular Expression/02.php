<?php 
    $value = 'avatar.zip';
    $options = array('options' => array('regexp' => '#\.(png|jpg|gif)$#'));
    if(!filter_var($value, FILTER_VALIDATE_REGEXP,$options)){
        echo 'No Image';
    }else echo 'Yes Image';