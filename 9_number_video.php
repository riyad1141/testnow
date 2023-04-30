<?php
class Ourclass{
  final  function say_hi(){
        echo "hello everyone how are you";
    }
}
class Myclass extends Ourclass{
    function say_hi(){
        echo "My name is Hasin hider";
    }
}
$mc = new Myclass();
$mc->say_hi();