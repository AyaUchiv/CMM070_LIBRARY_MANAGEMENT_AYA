<?php
$hostname = 'localhost';
$database = 'library_management';
$username = 'root';
$password = '';

//connect to the database
$conn = new mysqli($hostname,$username,$password,$database);

//check the connection
if ($conn->connect_error) die("Fatal Error");

?>