<?php
class person{
public $name="musraf";
public $age = 0;

function __construct($name="noname",$age=0){
    $this->name = $name;
    $this->age = $age;
}

function show(){
echo $this->name." ".$this->age;
}
}
$p1 = new person();
$p2 = new person("salman khan",22);
// $p1->name = "yahoo baab";
// $p1->age = 20;
$p1->show();
$p2->show();
?>