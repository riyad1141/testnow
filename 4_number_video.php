<?php
class Fund{
    private $Fund;
    function __construct($intial_fund = 0){
        $this->Fund = $intial_fund;
    }
    public function add_fund($money){
        $this->Fund += $money;
//        $this->Del_fund(5);
    }
    public function Del_fund($money){
        $this->Fund -= $money;
    }
    public function Total_fund(){
      echo  "our total fund is {$this->Fund} \n";
    }
}

$our_fund = new Fund(100);
//$our_fund->Fund = 115;
$our_fund->Total_fund();
$our_fund->add_fund(205);
$our_fund->Total_fund();
$our_fund->Del_fund(101);
$our_fund->Total_fund();
