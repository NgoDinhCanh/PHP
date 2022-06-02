<?php 
    require_once '4.function.php';
    $configs = parse_ini_file('config.ini');
    $fileUpload = $_FILES['file-upload'];
    $configExtension = explode('|',$configs['extension']);
    foreach($fileUpload['name'] as $key => $value){
        if($value !=null){
            $flagSize = checkSize($fileUpload['size'][$key],$configs['min_size'],$configs['max_size']);
            $flagExtension = checkExtension($value, $configExtension);
            if($flagSize == true && $flagExtension ==true){
            @move_uploaded_file($fileUpload['tmp_name'][$key],'../FileUpload/' . $fileUpload['name'][$key]);
            }
        }
    }
    