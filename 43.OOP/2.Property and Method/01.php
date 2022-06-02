<?php 
    class Cat{
        var $name ='Zeze';
        var $color = 'Black';
        var $age =1;

    }

    $catA = new Cat();

    echo '<br/>Name:' .$catA ->name;
    echo '<br/>Color:' .$catA ->color;
    echo '<br/>Age:' .$catA ->age;
    echo '<pre>';
    print_r($catA);
    echo '</pre>';