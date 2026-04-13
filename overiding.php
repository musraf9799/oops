  <?php 
//  class father{
//     public function __construct() {
//        echo 'connection';
//     }
//     function sounde(){
//         echo 'none';
//     }
//  }

// //  $animal = new animal();
//  class child extends father{
//     public function __construct() {
//        echo 'child';
//     }
//     function sounde(){
//         echo 'none';
//     }
//  }

//  child =  new father(); -->




  class prent{
   public $name = "prent class";
  }
  class child extends prent{
   public $name = "child class";
  }
  $obj = new child();




?>