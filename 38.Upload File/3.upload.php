<?php 
    require_once '4.function.php';
    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';

    $fileUpload = $_FILES['file-upload'];

    echo $flagSize = checkSize($fileUpload['size'],100*1024,5*1024*1024);
    echo '<br />';
    echo $flagExtension = checkExtension($fileUpload['name'],array('jgp','png','mp3','zip'));