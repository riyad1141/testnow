<?php
class Shape{

}
class Shaps{
    private $shapes;
    function __construct(){
        $this->shapes = array();
    }
    function add_shape(Shape $shape){
        array_push($this->shapes,$shape);
    }
    function Total_shape(){
        return count($this->shapes);
    }
}

class Rectangle extends Shape {

}


class Triangle extends Shape {

}

class Student{

}


$totalshape = new Shaps();
$totalshape->add_shape(new Rectangle());
$totalshape->add_shape(new Triangle());
//$totalshape->add_shape(new Student());
echo $totalshape->Total_shape();