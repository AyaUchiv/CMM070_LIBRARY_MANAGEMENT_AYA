<?php
$hostname = '192.168.10.20';
$database = 'sign_up_forms';
$username = 'root';
$password = 'root';

require_once 'login.php';
//connect to the database
$conn = new mysqli($hostname,$username,$password,$database);

//check the connection
if ($conn->connect_error) die("Fatal Error");

?>