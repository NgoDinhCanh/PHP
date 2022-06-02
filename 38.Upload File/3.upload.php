<?php 
    require_once '4.function.php';
    $fileUpload = $_FILES['file-upload'];

    $flagSize = checkSize($fileUpload['size'],100*1024,5*1024*1024);
    $flagExtension = checkExtension($fileUpload['name'],array('jgp','png','mp3','zip'));
    if($flagSize == true && $flagExtension ==true){
        @move_uploaded_file($fileUpload['tmp_name'],'../FileUpload/' . $fileUpload['name']);
        echo 'Suscess!';
    }