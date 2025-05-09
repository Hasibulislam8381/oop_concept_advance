<?php
  class car{
    public $brand;
    public $color;
    public function __construct($brand,$color)
    {
       $this->brand=$brand;
       $this->color=$color; 
    }
    public function result(){

        return "The brand is" . $this->brand." ". "and color is".$this->color;
    }
  }

  $mycar = new car('Toyota','Red');
  echo $mycar->result();
?>