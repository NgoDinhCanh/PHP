<?php 
    //error_reporting(0);
    //ini_set('error_reporting',0);
    error_reporting(E_ALL);
    $data = file_get_contents('data.txt');
    echo $data . '<br />';