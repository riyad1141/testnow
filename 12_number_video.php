<?php
class Math_calculator{
    static $name;
 static   function fibonacchi($n){
     self::$name = "Hasin Hider";
     self::Do_something();
    echo "the number of fibonacchi is {$n}\n";
    }

    static function Do_something(){
     echo "Doing Something\n";
    }

    function factorial($n){
     self::Do_something();
     $this->Do_something();
     echo "the number of Factorial is {$n}\n";

    }
}
$math = new Math_calculator();
//$math->fibonacchi(10);
$math->factorial(100);

Math_calculator::fibonacchi(20);
echo Math_calculator::$name;
//Math_calculator::factorial(200);