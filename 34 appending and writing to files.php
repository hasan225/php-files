<?php

//writing a file 
$fptr=fopen("34 my file.txt","w");
fwrite($fptr,"im writing something throught php to a text file");

//appending 
$fptr=fopen("34 my file.txt", "a");
fwrite($fptr, "im writing something throught php to a text file");






?>