<?php
    ini_set('display_errors','off');
    ini_set('error_log','php_error.log');
    $data = file_get_contents('data.txt');
    echo $data . '<br />';