<?php 
    class Cat{
        public $name ='Zeze';
        private $color = 'Black';
        protected $age =1;

    }

    $catA = new Cat();

    echo '<br/>Name:' .$catA ->name;
    echo '<br/>Color:' .$catA ->color;
    echo '<br/>Age:' .$catA ->age;
    