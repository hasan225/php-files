<?php
//for pointing
$fptr =fopen("31 my file.txt","r");


// echo fgetc($fptr);  //print a file character by character

// echo fgets($fptr);  //print a file line by line

//implimenting contents with while loop

// while($a=fgets($fptr)){
//     echo $a;
// }

//break at a certain position

while ($a=fgetc($fptr)){
    echo $a;
    if($a=="."){
        break;
    }
}
//closing the file
fclose($fptr);
?>