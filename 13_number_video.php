<?php
class A{
    static function say_hi(){
        echo "hello everyone i am from A \n";
    }
}
class B extends A{
    public static function say_hi()
    {
        echo "hello M name is Faisal \n";
        parent::say_hi();
    }
}
B::say_hi();