<?php

//start the session

session_start();

//check if the user is logged in
if (isset($_SESSION['id'])) {

//redirect to the user cart
header("Location:cart.php");
exit();
}
else {
//redirect to login page
header("Location: login.php");
exit();
}
?>