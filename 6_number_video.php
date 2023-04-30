<?php
class Parent_class{
    protected $name;
    function __construct($name){
        $this->name = $name;
        $this->say_hi();
    }
    function say_hi (){
        echo "My name is {$this->name}";
    }
}
class child_class extends Parent_class{
    function say_hi (){
        parent::say_hi();
        echo " \n Hello world";
    }
}
$obj = new child_class("Hasin Hider");