<?php 
    session_start();
    $image = '../../FileUpload/avatar.png';
    if(file_exists($image)){
        $_SESSION['image']['info'] = getimagesize($image);
        $_SESSION['image']['data'] = file_get_contents($image);
        print_r($_SESSION['image']['info']);
    }else echo 'File not Exists';