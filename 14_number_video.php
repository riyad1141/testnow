<?php
class A{
    protected static $name;
    static function say_hi(){
        self::$name = "Hasin Hider";
        echo "hello everyone i am from A \n";
    }
}
class B extends A{
    public static function say_hi()
    {
        echo "hello M name is Faisal \n";
        parent::say_hi();
        echo parent::$name;
    }
}
B::say_hi();