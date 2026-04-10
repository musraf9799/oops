<?php
class base{
protected $name;

public function __construct($n){
$this->name = $n;
}
protected function show(){
echo "Your Name:" .$this->name . "<br>";
}
}
class derived extends base{
  public function get(){
    echo "your Name:".$this->name . "<br>";
  } 
}
$test = new derived("hello musarf dewra");
// $test->name = "baba yahoo";
$test->get();
?>