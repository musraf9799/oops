<?php
class Animal {
    public function sound(){
        echo "Hello";
    }
}

class Dog extends Animal {
    public function sound(){
        echo "musraf";
    }
}

$obj = new Animal();
$obj->sound();
?>