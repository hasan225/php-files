<?php

echo "Get Some Cookies For Yourself <br>";

//cookies | sessions

//syntex to set a cookie
echo time();

setcookie("catagory","books,music,technology,foods,travel,drinks",time() +86400,"/");

echo "<br>the cookie is set"
?>