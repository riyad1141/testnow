<?php
class Student {
    private $name;
    private $age;
    private $class;
    function __construct($name = '',$age = '',$class = ''){
        $this->name =$name;
        $this->age = $age;
        $this->class = $class;
    }

    public function __get($property){
        return $this->$property;
    }
    public function __set($property,$value){
        $this->$property = $value;
    }
//    public function get_name(){
//        return $this->name;
//    }
//    public function set_name($name){
//        $this->name =$name;
//    }
//    public function get_age(){
//        return $this->age;
//    }
//    public function set_age($age){
//        $this->name =$age;
//    }
//    public function get_class(){
//        return $this->class;
//    }
//    public function set_class($class){
//        $this->name =$class;
//    }
}

$obj = new Student("Hasin",40,10);
//$obj = new Student();
//$obj->set_name("Hasin");
//echo $obj->get_name();



echo $obj->name; // this is get method
echo PHP_EOL;




$obj->class = "he is passed class 10"; // this is set method
echo $obj->class;