<?php

const br ="</br>";

echo "<h2 style='color:red;'>16 Associative Array</h2>";

echo "<h3>1 numeric array</h3>";
$arrayv =array("hasan","joy");

// echo($arrayv[0]);
echo "<h3>2 associative array</h3>";

$favcol =array ("bijoy"=>"red", "joy"=>"white","jui"=>"green","rahat"=>"yellow",8=>"eight");



// simple way to print associative array

// echo br;

// print_r($favcol["bijoy"]);

// echo br;

// echo $favcol["8"]


echo "<h3> printing assiciative array with loop</h3>";

foreach ($favcol as $key => $value) {
    echo "favorite color of $key is $value <br>";
}

?>

