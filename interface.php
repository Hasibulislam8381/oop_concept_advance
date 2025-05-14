<?php
  interface Remote{
     public function turnOn($name);
     public function turnOff($name);
  }

  class TvRemote implements Remote{
    public function turnOn($name)
    {
        echo "{$name} Turned on";
    }
    public function turnOff($name)
    {
        echo "{$name} Turned Off";
    }
  }
  $remote = new TvRemote();
  $remote->turnOff("Sony");
  echo "<br>";
  $remote->turnOn("LG");
?>