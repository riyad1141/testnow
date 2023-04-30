<?php
class Human{
    public $name;
     function Say_hi(){
        $this->Say_name();
        echo "\n hello everyone how are you";
    }
     function Say_name(){
        echo "My name is {$this->name}";
    }
}

class Cat{
    function Say_hi(){
        echo "Meow";
    }
}

class Dog{
    function Say_hi(){
        echo "Woof";
    }
}

$h1 = new Human();
$h2 = new Human();
$h1->name = "Hasin Hider";
$h2->name = "Faisal Ahmed";
$c1 = new Cat();
$D1 = new Dog();


$h1->Say_hi();
echo PHP_EOL;
$h2->Say_hi();
//$c1->Say_hi();
//echo PHP_EOL;
//$D1->Say_hi();
//echo PHP_EOL;
//$h1->Say_name();