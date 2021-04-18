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

$sql = "SELECT * FROM `my table`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num= mysqli_num_rows($result);



echo $num." Found in this database";
 echo br;

if($num>0){

    // $row =mysqli_fetch_assoc($result);
    //  echo var_dump($row);
    //  echo br;
    //  $row =mysqli_fetch_assoc($result);
    //  echo var_dump($row);
    //  echo br;
    //   $row =mysqli_fetch_assoc($result);
    //  echo var_dump($row);
    //  echo br;
    //  $row =mysqli_fetch_assoc($result);
    //  echo var_dump($row);
    //  echo br;
    //   $row =mysqli_fetch_assoc($result);
    //  echo var_dump($row);
    //  echo br;
    //  $row =mysqli_fetch_assoc($result);
    //  echo var_dump($row);
    //  echo br;
    //  $row =mysqli_fetch_assoc($result);
    //  echo var_dump($row);
    //  echo br;
    //  $row =mysqli_fetch_assoc($result);
    //  echo var_dump($row);
    //  echo br;

    //we will do it with while loop

    while($row=mysqli_fetch_assoc($result)){
        //echo var_dump($row);
        echo br;
        echo $row['sno'] .  ". Hello ". $row['name'] ." Welcome to ". $row['gender'];
        echo "<br>";
    }

}


?>
