<?php
    require_once 'Dog.class.php';
    class Lion extends Dog{
        public $height;
        public function setHeight($value){
            $this->height = $value;
        }
        public function getHeight(){
            return $this->height;
        }
        public function show(){
            echo '<br/>Name:' .$this ->name;
            echo '<br/>Color:' .$this ->color;
            echo '<br/>Age:' .$this ->age;
            echo '<br/>Height:' .$this ->height;
        }
    }