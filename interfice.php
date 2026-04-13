<?php
interface parent1{
 function sum($a,$b);  
}
interface parent2{
function sub($c,$d);
}
class childclass implements parent1, parent2{
public function calc($a,$b){
    echo $a+$b;
}
public function sub($a,$b){
    echo $a-$b;
}
$test = new childclass();
$test->calc($a,$B);
echo "<br>";
$test->sub(20,30);
?>