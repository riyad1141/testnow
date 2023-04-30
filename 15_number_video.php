<?php
class MyClass{
    const CITY = "Dhaka";
    function Say_hi(){
        echo "say hi from ".self::CITY;
    }
}
$obj = new MyClass();
echo $obj::CITY;
echo PHP_EOL;
$obj->say_hi();
//echo MyClass::CITY;