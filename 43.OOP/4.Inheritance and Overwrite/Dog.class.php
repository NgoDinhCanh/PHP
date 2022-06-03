<?php 
    class Dog{
        public $name;
        public $color;
        public $age;
        //TH1 __construct() 
        /*
        public function __construct(){
            $this->name = 'Bigbull';
            $this->color = 'White';
            $this->age = 3;
        }
        */
        //TH2_3 __construct() 
        /*
        public function __construct($name ='HiHi',$color = 'Black',$age = 2){
            $this->name = $name;
            $this->color = $color;
            $this->age = $age;
        }
        */
        //TH4 __construct()
        /* 
        public function Dog($name ='HiHi',$color = 'Black',$age = 2){
            $this->name = $name;
            $this->color = $color;
            $this->age = $age;
        }
        */
        //TH5 __construct()
        public function __construct($arrDog){
            $this->name = $arrDog['name'];
            $this->color = $arrDog['color'];
            $this->age = $arrDog['age'];
        }
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