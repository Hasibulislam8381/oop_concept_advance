<?php
class Goru
{
    public static $value = 3.1416;

    public function staticValue()
    {
        echo self::$value;
    }
}
$obj = new Goru();
$obj->staticValue();
echo "<br>";
echo "The value is" . $obj->staticValue();