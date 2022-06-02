<?php 
    require_once 'Dog.class.php';
    $dogA = new Dog();
    $dogA->setName('Hell0');
    $dogA->setColor('Yellow');
    $dogA->setAge(1);
    $dogA->show();