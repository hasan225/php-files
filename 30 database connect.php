
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "bijoydatabse";


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("connection wasn't successfull" . mysqli_connect_error());
} else {
    echo "connection was successfull <br>";
}
