<?php 
    require_once 'Lion.class.php';
    $arrInfo = array('name' => 'Lion-A','color' => 'Red','age' => 3,'height' => '3m');
    $lionA = new Lion($arrInfo);

    echo '<pre>';
    print_r($lionA);
    echo '</pre>';

    $lionA->show();