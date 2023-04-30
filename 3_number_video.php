<?php
//class Human{
//
//    function __construct($person_name,$person_age=0){
//        $this->name = $person_name;
//        $this->age = $person_age;
////        echo "this is constructor method it is execute auto\n";
//    }
//    public $age;
//    public $name;
//    function Say_hi(){
//        $this->Say_name();
//        echo "\n hello everyone how are you";
//    }
//    function Say_name(){
//        if ($this->age){
//            echo "My name is {$this->name} and i am {$this->age} year's old";
//        }else{
//            echo "My name is {$this->name} and i don't know how old i am";
//        }
//
//    }
//}
//
//$h1 = new Human("Faisal Ahmed",50);
//$h2 = new Human("Rabbil Hasan",33);
//$h3 = new Human("Yousuf Ali");
////$h1->name = "Hasin Hider";
//
//$h1->Say_hi();
//echo PHP_EOL;
//$h2->Say_hi();
//echo PHP_EOL;
//$h3->Say_hi();





// below the new system of constructor method this is very nice


class Human{

    function __construct(public $person_name, public $person_age=0){

//        echo "this is constructor method it is execute auto\n";
    }
    function Say_hi(){
        $this->Say_name();
        echo "\n hello everyone how are you";
    }
    function Say_name(){
        if ($this->person_age){
            echo "My name is {$this->person_name} and i am {$this->person_age} year's old";
        }else{
            echo "My name is {$this->person_name} and i don't know how old i am";
        }

    }
}

$h1 = new Human("Faisal Ahmed",50);
$h2 = new Human("Rabbil Hasan",33);
$h3 = new Human("Yousuf Ali");
//$h1->name = "Hasin Hider";

$h1->Say_hi();
echo PHP_EOL;
$h2->Say_hi();
echo PHP_EOL;
$h3->Say_hi();



















