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
        public function show(){
            echo '<br/>Name:' .$this ->name;
            echo '<br/>Color:' .$this ->color;
            echo '<br/>Age:' .$this ->age;
        }
    }