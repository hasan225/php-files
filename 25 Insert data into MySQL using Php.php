<?php

const br ="<br>";

//connecting to the data base

$servername = "localhost";
$username = "root";
$password = "";
$database = "bijoydatabse";

$conn=mysqli_connect($servername,$username,$password,$database);

// die if connection wasn't successful

if (!$conn){
    die("connection failed");
}
else{echo"connected successfully";}

echo br;

//variable to be inserted into the table

$name = "sanjida";
$age = "16";
$gender = "female";
$profession= "programmer";

//sql query to be executed

$sql ="INSERT INTO `my table` (`name`, `age`, `gender`) VALUES ('$name', '$age','$gender')";

$result=mysqli_query($conn,$sql);

//add new trip to the new trip table in the database
if ($result){
    echo "the record was inserted successfully";
}
else{ echo "the record wasn't inserted successfully because of this error ".mysqli_error($conn);}



?>