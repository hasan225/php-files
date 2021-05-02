<?php
class employee{

    public $name;
    public $age;
    public $salary;
 
//     constructor without any arguments
//     function __construct()
//     {
//    echo "hello "  ;      
//     }


      function __construct($name,$age,$salary){
          $this->name=$name;
          $this->age=$age;
          $this->salary=$salary;
      }
      function __destruct(){
          echo " destructing <br>";
      }

}
$bijoy=new employee("bijoy",21,1000);
$joy= new employee("joy",23,20000);
echo "bijoy's salary is $bijoy->salary <br>";
echo "joy's salary is $joy->salary <br>";
?>







