<?php
interface Base_animal{
    function is_alive();
    function Can_Eat($param1,$param2);
    function breed();
}
class Animal implements Base_animal{

    function is_alive()
    {
        // TODO: Implement is_alive() method.
    }

    function Can_Eat($param1, $param2)
    {
        // TODO: Implement Can_Eat() method.
    }

    function breed()
    {
        // TODO: Implement breed() method.
    }
}

interface Base_Human extends Base_animal{
    function say_talk();
}


abstract class hello_php implements Base_Human{
    abstract function say_hi();
    function animal(){
        echo "hello everyone how are you";
    }
}
class hello_all extends hello_php {

    function is_alive()
    {
        // TODO: Implement is_alive() method.
    }

    function Can_Eat($param1, $param2)
    {
        // TODO: Implement Can_Eat() method.
    }

    function breed()
    {
        // TODO: Implement breed() method.
    }

    function say_talk()
    {
        // TODO: Implement say_talk() method.
    }
     function say_hi(){

    }

}
//$h1 = new hello_all();
//echo $h1 instanceof Base_Human;












