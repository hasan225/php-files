<?php

// $rakib=[59,78,48,90,38,51];

// function sumof($numarray){
//    $sum=0;
//    foreach ($numarray as $value){
//       $sum+=$value;
//    }
   
//    return $sum;
// }
// $result=sumof($rakib);
// echo $result;

echo "<br>calculating numbers<br>";

$rohan =[40,43,20,94,84,29];


function processMarks ($marksarray){
    $sum=0;
    foreach ($marksarray as $value){
            $sum+=$value;
    }
    return $sum;
}
$scored=processMarks($rohan);
echo $scored;



echo "<br>calculating avarage of numbers<br>";

$rakib =[34, 98, 45, 12, 98, 93];

function sumofnum ($arraynum){
         $sum=0;
         $avg=1;

    foreach($arraynum as $value){
        $sum+=$value;
        $avg++;
    }
    return $sum/$avg;
}
$result=sumofnum($rakib);
echo $result;






echo "<br>making an associative array with function <br>";

function pinfo (array $info){
   print_r($info);
}
$information=array('name'=>'bijoy');
print_r($information);
// ?>


