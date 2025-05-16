<?php
class Gog
{
    public static function deshi()
    {
        echo "ssds";
    }
}
Gog::deshi();

class Dog
{
    public static function color()
    {
        echo "The Dog color is Red";
    }
    public function __construct()
    {
        self::color();
    }
}

new Dog();