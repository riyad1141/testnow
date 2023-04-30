<?php
class RGB{
    private $color; // #ff0000
    private $red;
    private $green;
    private $blue;
  function __construct($color_code = ''){
      $this->color = ltrim($color_code,"#");
      $this->parse_color();
  }
  function get_color(){
      return $this->color;
  }

    function get_RGB_color(){
        return array($this->red,$this->green,$this->blue);
    }

    function Read_RGB_color(){
       echo "Red = {$this->red}\n Green = {$this->green}\n and blue = {$this->blue}";
    }

    function set_color($color_code){
        $this->color =  ltrim($color_code,"#");
        $this->parse_color();
    }

    private function parse_color(){
      if ($this->color) {
//          $colors = sscanf($this->color, '%02x%02x%02x');
          list($this->red, $this->green, $this->blue) = sscanf($this->color, '%02x%02x%02x');
//          print_r($colors);
//          echo $this->red ."\n";
//          echo $this->green ."\n";
//          echo $this->blue ."\n";
      }else{
          list($this->red, $this->green, $this->blue) = array(0,0,0);
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

}

$my_color = new RGB("#ffef27");
$my_color->Read_RGB_color();