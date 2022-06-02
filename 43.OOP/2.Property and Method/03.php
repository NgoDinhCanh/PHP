<?php 
    class Cat{
        public $name ='Zeze';
        private $color = 'Black';
        protected $age =1;

        public function getColor(){
            return $this->color;
        }

    }

    $catA = new Cat();

    echo '<br/>Name:' .$catA ->name;
    echo '<br/>Color:' .$catA ->getColor();
    echo '<br/>Age:' .$catA ->age;