<?php
class RGB{
    private $color;
    private $red;
    private $green;
    private $blue;
    function __construct($color_code = ''){
        $this->color = ltrim($color_code, '#');
        $this->parse_color();
    }
   private function parse_color(){
        if ($this->color){
            list($this->red,$this->green,$this->blue) = sscanf($this->color,"%02x%02x%02x");
        }else{
            list($this->red,$this->green,$this->blue) = array(0,0,0);
        }
   }
   function get_red(){
        return $this->red;
   }
    function get_green(){
        return $this->green;
    }
    function get_blue(){
        return $this->blue;
    }
    function read_Rgb_color(){
        echo "Red = {$this->red} \n Green = {$this->green} \n Blue = {$this->blue}";
    }
}

$obj = new RGB("#ffef27");
$obj->read_Rgb_color();