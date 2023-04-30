<?php
class District_collection {
    private $district;
    function __construct(){
        $this->district = array();
    }
    function add($district){
        array_push($this->district,$district);
    }
    public function get_district(){
        return $this->district;
    }

}
$person = new District_collection();
$person->add("Dhaka");
$person->add("Rajshahi");
$person->add("Khulna");
$person->add("Barisal");
$person->add("Rangpur");
$person->add("Chottogram");
$person->add("Sylhet");
$person->add("Mymonsingh");

$person1 = $person->get_district();
foreach ($person1 as $data){
    echo $data."\n";
}


//print_r($person1);