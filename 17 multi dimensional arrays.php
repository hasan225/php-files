<?php
// for($i=0;$i< count($multiarray2);$i++){

//     for ($j=0; $j < count($multiarray2[$i]); $j++) { 

//         echo $multiarray2 [$i][$j];
//         echo " ";
       
//     }
//     echo br;
// }

const br ="<br>";

echo "<h1 style='color:red;text-align:center'>17 multi dimensional arrays</h1>";

echo "<h3> kind of MD array</h3>";

$multiarray=array ("joy","bijoy",["imtiaj","saiful","ismail"],"jui");

echo $multiarray[2][1];


echo "<h3>multidimensional array</h3>";

$multiarray2 =array(array(2,4,6,8),
                    array(3,4,5,6),
                    array(4,5,6,7));

    echo var_dump($multiarray);                

echo "<h3>3mutltidimensional array (Commented out)</h3>";                  
// $multiarray3=array(array(array(13,14,15,16),
//                          array(17,18,19,20),
//                          array(21,22,23,24)),
//                    array(1,2,3,4),
//                    array(5,6,7,8),
//                    array(9,10,11,12));

// for($a=0;$a<count($multiarray3);$x++){
//     for ($b=0; $b < count($multiarray3[$a]); $b++) { 
//         for ($c=0; $c < $multiarray3[$a][$b][$c]; $c++) { 
//             echo var_dump($multiarray3[$a][$b][$c]);
//         }
//     }
// }



//echo var_dump($multiarray2);
echo "<h3>printing multidimensional array</h3>";
echo $multiarray2[1][2];
echo br;

echo "<h3> printing multidimensional array with var dump</h3>";

for($x=0;$x<count($multiarray2);$x++){
   echo var_dump($multiarray2[$x]) ;
}
echo br;

echo "<h3>printing multidimensional array with nested for loop</h3>";

for ($i=0; $i<count($multiarray2);$i++){
      for($j=0;$j<count($multiarray2[$i]);$j++){
         echo $multiarray2[$i][$j];
         echo " "; 
      }
      echo br;
}

?>