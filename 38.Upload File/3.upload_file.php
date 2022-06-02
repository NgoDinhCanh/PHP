<?php 
    require_once '4.function.php';

    $configs = parse_ini_file('config.ini');
    $fileUpload = $_FILES['file-upload'];

    $flagSize = checkSize($fileUpload['size'],$configs['min_size'],$configs['max_size']);
    $flagExtension = checkExtension($fileUpload['name'],explode('|',$configs['extension']));
    if($flagSize == true && $flagExtension ==true){
        @move_uploaded_file($fileUpload['tmp_name'],'../FileUpload/' . $fileUpload['name']);
        echo 'Suscess!';
    }