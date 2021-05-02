<?php 

class calculation {
    public $a, $b, $c;   //properties


    function sum(){  //method for sum

        $this->c =$this->a + $this->b;  

        return $this->c;
    }

    function sub(){    // another method for substract
         $this->c=$this->a -$this->b;
        return $this->c;
    }
}

$sum1 = new calculation();  //creating an objects for sum

$sum1->a=20;  //asigning values
$sum1->b=10;   

$sub1 = new calculation();  //creating objects for substracting

$sub1->a=50;  //asigning values
$sub1->b=10;

echo $sub1->sub(); //echo result for sub
echo "<br>";
echo $sum1->sum();  //echo result for sum
?>