<?php
//abstract class Shape{
//    abstract   function get_area();
//    abstract   function get_perimeter();
//}
//class Rectangle extends Shape{
//    public $base;
//    public $hight;
//    function __construct($base,$hight)
//    {
//        $this->base = $base;
//        $this->hight = $hight;
//    }
//    function set_base($base){
//        $this->base = $base;
//    }
//    function set_hight($hight){
//        $this->hight = $hight;
//    }
//    function get_area(){
// return $this->base * $this->hight;
//    }
//    function get_perimeter(){
//
//    }
//}
//
//class Triangle extends Shape{
//    public $base;
//    public $hight;
//    function __construct($base,$hight)
//    {
//        $this->base = $base;
//        $this->hight = $hight;
//    }
//    function get_area(){
//        return $this->base * $this->hight;
//    }
//    function get_perimeter(){
//
//    }
//}
//$rectangle = new Rectangle(10,20);
//echo $rectangle->get_area();





abstract class Ourclass{
    function say_hi(){
        echo "hello world";
    }
    abstract function eat($x1,$x2);
}

class Myclass extends Ourclass{
     function eat($m1,$m2){
      echo "my name is hasin hider";
    }
}

$mc = new Myclass();
//$mc->say_hi();
$mc->eat(5,10);














