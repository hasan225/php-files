<?php

//pointer
$fptr = fopen("31 my file.txt","r");

//for accessing the contents
$content =fread($fptr,filesize("31 my file.txt"));

echo $content;

//for closing the file
fclose($fptr);


?>