<?php
//what is session
// used to manage information across difference websites

//varify the user login info

 session_start();

 $_SESSION['username']="bijoy hasan";
 $_SESSION['favcat'] = "books,music,technology,foods,travel,drinks,";

 echo "we saved your session"
?>