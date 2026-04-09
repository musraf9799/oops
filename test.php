<?php
class employee{
public $name;
public $age;
public $saleary;
function __construct($n, $a, $s){
 $this->name = $n;
 $this->age = $a;
 $this->saleary = $s;
}
 function info(){
    echo "<h3>empoly profile</h3>";
    echo "Emploay Name:" . $this->name . "<br>";   
    echo "Emploay Age:" . $this->age . "<br>";
    echo "employ Saleary:" . $this->saleary . "<br>";
 }
}
$e1 = new employee("musraf",25,2000);
?>