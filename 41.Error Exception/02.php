<?php 
    if(file_exists('data.txt')){
        $data = file_get_contents('data.txt');
        echo $data;
    }else die('File not found');
    
    echo '<br />Yeah!!!';
    