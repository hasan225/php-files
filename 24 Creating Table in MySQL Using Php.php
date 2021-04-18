<?php

const br="<br>";

//connecting to the data base

$servername = "localhost";
$username = "root";
$password = "";
$database = "bijoydatabse";

$conn=mysqli_connect($servername,$username,$password,$database);

echo"connected";
echo br;

// die if connection wasn't successful

if (!$conn){
    die("sorry we failed to connect you because of this error".mysqli_connect_error()) ;

}

else{echo "connection was successfull";}

//creating a table in the database

$sql = "CREATE TABLE `bijoy`.`phptrip` ( `sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(13) NOT NULL , `age` INT(3) NOT NULL , `dest` VARCHAR(20) NOT NULL , PRIMARY KEY (`sno`))";
$result=mysqli_query($conn,$sql);
//check for the table creation success
if ($result){
    echo "the table was created was successfully";
}
else{ echo "the table wasn't created successfully because of this error ".mysqli_error($conn);}
?>

