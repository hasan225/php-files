<?php
echo "<h1 style='color:red;text-align:center'>18 Local Global Scope</h1>";


echo "<h3> 1 this is a global scope variable coz its outside of a function</h3>";    
const br="<br>";

$x=20;
echo $x;
echo br;

echo "<h3> 2 this is a local scope variable coz its inside of a function</h3>";

function printv(){
   $a=29;
    echo $a;
}
printv();


echo "<h3> 3 using global variables inside a function</h3>";

$i=50;
$j=100;

function gloinlo(){
    global $i,$j;
    echo "$i $j";
}
gloinlo();

echo "<h3> 4 changing the value of a global scope after using global variables inside a function</h3>";

$k=200;
$l=300;

function swapping(){
    global $k,$l;
    
    $k=500;

    $l=700;
    echo "$k $l";
}
swapping();


// get post checkbox

// <div class="mb-3 form-check">
//     <input type="checkbox" class="form-check-input" id="exampleCheck1">
//     <label class="form-check-label" for="exampleCheck1">Check me out</label>
//   </div>



?>

