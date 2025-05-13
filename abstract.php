<?php
   abstract class Car{
     public $name;
     public function __construct($name)
     {
        $this->name=$name;
     }
     abstract public function intro();
   }

   class Toyota extends Car{
     public function intro()
     {
        echo "The car name is $this->name";
     }
   }
   class Marchedes extends Car{
     public function intro()
     {
        echo "The car name is $this->name";
     }
   }

   $toyota = new Toyota("Toyota");
   $toyota->intro();
   echo "<br/>";
   $marchedes = new Marchedes("Marchedes");
   $marchedes->intro();
?>