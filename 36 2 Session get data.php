<?php

// start the session and get the data

 session_start();

 if (isset($_SESSION['username'])){

    echo "welcome " . $_SESSION['username'];

    echo "<br>";
    echo "your favorite catagory " . $_SESSION['favcat'];

    echo "<br>";

 }

 else{ echo "please log in to continue";}



 ?>
