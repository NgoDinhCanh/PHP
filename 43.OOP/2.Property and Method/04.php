<?php 
    class Dog{
        public $name;
        public $color;
        public $age;
        public function getName(){
            return $this->name;
        }
        public function getColor(){
            return $this->color;
        }
        public function getAge(){
            return $this->age;
        }
        public function setName($value){
            $this->name = $value;
        }
        public function setColor($value){
            $this->color = $value;
        }
        public function setAge($value){
            $this->age = $value;
        }
    }

    $dogA = new Dog();
    $dogA->setName('Hell0');
    $dogA->setColor('Yellow');
    $dogA->setAge(1);
    echo '<br/>Name:' .$dogA ->name;
    echo '<br/>Color:' .$dogA ->color;
    echo '<br/>Age:' .$dogA ->age;