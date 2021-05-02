<?php

class player{

    public $name;
    public $age ="15+";

    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }
}

$name1=new player();
$name1->set_name("bijoy");
echo $name1->get_name();                                            
echo $name1->age;
echo "<br>";

$name2=new player();
$name2->set_name("joy");
echo $name2->get_name();
echo "<br>";

$name3 =new player;
$name3->set_name("jui");
echo $name3->get_name();
?>