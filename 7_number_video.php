<?php
class Shape{
    protected $name;
    protected $area;
    function __construct($name){
        $this->name = $name;
        $this->calculate_area();
    }
    public function get_area(){
        echo "This {$this->name}'s area is {$this->area}";
    }
    public function calculate_area(){

    }
}
class Triangle extends Shape {
    private $a, $b, $c;
    function __construct($a,$b,$c){
$this->a = $a;
$this->b = $b;
$this->c = $c;
parent::__construct("Triangle");
    }
    public function calculate_area(){
$parameter = ($this->a+$this->b+$this->c) / 2;
$this->area = sqrt($parameter*($parameter-$this->a)*($parameter-$this->b)*($parameter-$this->c));
    }
}
class file extends Shape
{
    private $a, $b;

    function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
        parent::__construct("file");
    }
        public
        function calculate_area()
        {

            $this->area = $this->a * $this->b;
        }

}
$obj = new file(10,20);
$obj->get_area();

echo PHP_EOL;

$obj2 = new Triangle(10,20,30);
$obj2->get_area();
