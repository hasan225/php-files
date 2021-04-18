<?php

echo "<h3>printing the value of array with for looop</h3>";
$names=array("bijoy","joy","jui");

for ($x=0;$x<count($names);$x++){
    echo "<br>";
    echo $names[$x];
}

echo "<h3>2 printing the value of array with foreach looop</h3>";
foreach($names as $value){
    echo $value; 
    echo "<br>";
}





?>