<?php

class fruit{
    public $name;
    public $color;

    public function __construct($name,$color)
    {
       $this->name=$name;
       $this->color=$color; 
    }
    public function intro(){
        echo "The fruit name is {$this->name} and the color is {$this->color}";
    }
}

class apple extends fruit{
    public function message(){
        echo "I am a apple";
    }
}

$apple=new apple("Apple","Red");
$apple->message();
$apple->intro();


?>