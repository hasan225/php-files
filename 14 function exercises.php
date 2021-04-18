<?php

echo "<h2 style='color:red;'>exercise product price with vat</h2>";
$price=60000;

$vat =57;

function proprice($price,$vat){

   $mainprice=($price/100*$vat+$price);

   return $mainprice;
}
echo proprice($price,$vat);

echo "<br>";

echo "<h2 style='color:red;'>2 exercise finding out a leap year</h2>";

$year=2004;

function leapyear($year){
    if($year%4==0 || $year%400==0){
        return true;
    }
    else{return false;}
}
if (leapyear($year)){
    echo "its a leap year";
    
}
else {echo "its not";}

echo "<h2 style='color:red;'>3 exercise calculater</h2>";

$num1=50;
$num2=30;

echo "<h5>calculator add numbers</h5>";

function addnum($num1,$num2){
    return $num1+$num2;
}
echo addnum($num1,$num2);

echo "<h5>calculator substract numbers</h5>";

function substractnum($num1,$num2){
    return $num1 - $num2;
}

echo substractnum($num1,$num2);

echo "<h5>calculator multiply numbers</h5>";

function multiplynum ($num1,$num2){
    return $num1 * $num2;
}

echo multiplynum($num1,$num2);

echo "<h5>calculator divide numbers</h5>";

function dividenum ($num1,$num2){
    return $num1 / $num2;
}
echo dividenum($num1,$num2);


echo "<h2 style='color:red;'>4 swapping numbers</h2>";

$num1=20;
$num2=10;
function swapping($num1,$num2){

    $temp=$num1;
    $num1=$num2;
    $num2=$temp;
    echo "num1 is now num2 value ".$num1." num2 is now num1 value ".$num2;
}
swapping($num1,$num2);

$num1=10;

echo "<h2 style='color:red;'>5 check even and odd number</h2>";

function evenOdd($num1){
    if($num1%2==0)
    {echo "num1 is an even number";}
    else{echo "its an odd number";}
}


evenOdd($num1);


echo "<h2 style='color:red;'>boolean value with prime numbers (btw i dont understand this)</h2>";

$num1=1;

function primeNumber ($num1){
    if($num1==1){
        return false;
    }else{
        for($i=2;$i<$num1/2;$i++){
            if($num1 % $i ==0){
                return false;
            }

        }
        return 1;
    }
}
if (primeNumber($num1)){
    echo "this is a prime number";
}
else{echo "its not";}

echo "<h2 style='color:red;'>factorial with function</h2>";

// function number($n)
// {
//   if($n ==0)
//     {
// 	   return 1;
//     }
//   else 
//     {	
// 	   return $n *number($n-1);
//     }
// 	}
// print_r(number(5));




// function number($n){
//     if($n==0){
//         return 1;}
//         else{return $n* number($n-1);}
//     }

// echo number(4)

function number($n){
    if ($n==0){return 1;}
    else{return $n* number($n-1);}
}
echo number(5);





?>
