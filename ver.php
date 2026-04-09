<?php 
class employer {
    public $name;
    public $age;
    public $sellary;

    function __construct($n,$a,$s){
        $this->name = $n;
        $this->age = $a;
        $this->sellary = $s;
     }
    

    function info(){
        echo "<h3>empolay profile</h3>";
        echo "empllary Name: " . $this->name . "<br>";
        echo "empllary Age: " . $this->age . "<br>";
        echo "empllary Sellary: " . $this->sellary . "<br>";
    }
}
class manager extends employer {
public $ta = 1000;
public $phone = 300;
public $totalsalary;
function info(){
 $this->totalsalary = $this->sellary + $this->ta + $this->phone;
echo "<h3>manager profile</h3>";
echo "empllary Name:". $this->name . "<br>";
echo "empllary Age:" . $this->age . "<br>";
 echo "Total Sellary: " . $this->totalsalary . "<br>";
}
}

$e1 = new manager("musrf",25,20000);
$e2 = new employer("mukesh",30,2000);
$e1->info();
$e2->info();
 ?>