<?php
abstract class prentclass{
    public $name;
 abstract protected function sum($a,$b);
}
class child extends  prentclass{
 public function sum($a,$b){
 echo $a+$b;
 }
}
$obj = new child();
$obj->sum(10,20);
?>