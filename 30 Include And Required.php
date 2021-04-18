
<?php

// include '30 Include file.php';
require '30 database connect.php';

$sql = "SELECT * FROM `my table`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);



echo $num . " Found in this database";
while ($row = mysqli_fetch_assoc($result)) {
    //echo var_dump($row);

    echo $row['sno'] .  ". Hello " . $row['name'] . " Welcome to " . $row['gender'];
    echo "<br>";
}



?>