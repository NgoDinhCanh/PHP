<?php 
    require_once 'Dog.class.php';
    //$dogA = new Dog();
    //$dogA = new Dog('GauGau','blue',3);
    //$dogB = new Dog();
    $arrInfoDog = array(
        'name' => 'hehe',
        'color' => 'green',
        'age' => 2,
    );
    $dogA = new Dog($arrInfoDog);
    $dogA->show();
    //$dogB->show();