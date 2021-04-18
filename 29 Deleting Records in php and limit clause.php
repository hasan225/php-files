<?php

$servername="localhost";
$username ="root";
$password = "";
$database = "bijoydatabse";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){ die("wasn't connected successfully".mysqli_connect_error());}
else {echo "connected successfully";}

$sql = "DELETE FROM `my table` WHERE `age` = '16' LIMIT 5";
$result = mysqli_query($conn, $sql);

$affected=mysqli_affected_rows($conn);
echo  "<br> number of affected rows: <br> $affected ";

if($result){echo "deleted successfully";}
else{$error=mysqli_error($conn);
    echo "wasn't deleted successfully because of this error --> $error";}




?>
