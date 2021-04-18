<?php

const br ="<br>";
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "bijoydatabse";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}
$sql = "SELECT * FROM `my table` WHERE `gender`='female'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num= mysqli_num_rows($result);

echo $num." Found in this database";
 echo br;

//to print as they are
//usage of where clause to fetch data from the database

//  if($num>0){
//   while($row=mysqli_fetch_assoc($result)){
//         //echo var_dump($row);
//         echo br;
//         echo $row['sno'] .  ". Hello ". $row['name'] ." Welcome to ". $row['gender'];
//         echo "<br>";
//     }
// }

// to print them serially with new given number

$num=1;
 if($num>0){
  while($row=mysqli_fetch_assoc($result)){
        //echo var_dump($row);
        echo br;
        echo $num.  ". Hello ". $row['name'] ." Welcome to ". $row['gender'];
        echo "<br>";
        $num=$num+1;}
}

//usage of where clause to update data
$sql = "UPDATE `my table` SET `name` = 'aktarupdated' WHERE `my table`.`sno` = 5";
$result = mysqli_query($conn, $sql);

$affected=mysqli_affected_rows($conn);
echo  "<br> number of affected rows: <br> $affected ";
if($result){
    echo "we updated the records successfully";
}
else {"we failed to update";}

?>