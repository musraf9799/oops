<?php


  class prent{
   public $name = "prent class";
  }
  class child extends prent{
   public $name = "child class";
  }
  $obj = new prent();
  echo $obj->name;
?>