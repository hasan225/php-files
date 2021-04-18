<?php

const br ="<br>";

//connecting to the data base

$servername="localhost";
$username = "root";
$password ="";

//create a connection

$conn=mysqli_connect($servername,$username,$password);

// die if connection wasn't successful

if(!$conn){
    die("sorry we failed".mysqli_connect_error());
}
else{ echo "connection is successfull";}

echo br;

//create a database

$sql ="CREATE DATABASE dbbijoy16";

$result=mysqli_query($conn,$sql);

//check for the database creation success

echo var_dump($result);

echo br;


if ($result){
    echo "database was created was successfully";
}
else{ echo "the database wasn't created successfully because of this error ".mysqli_error($conn);}


?>
