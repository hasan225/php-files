<?php
echo "welcome to the stage where we are ready to get connected to a database <br>";

//connecting to the database

    $servername = "localhost";
    $username = "root";
    $password = "";
//  $database = "bijoydatabse";    this will come in the next tutorial


//create a connection

$conn = mysqli_connect($servername, $username, $password);//, $database

if(!$conn){
    die("sorry we failed to connect".mysqli_connect_error());
}
else{echo  "connection was successful";}

?>
