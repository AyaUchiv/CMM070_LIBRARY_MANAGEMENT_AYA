<?php

//when i submit my form
if (isset($_POST["submit"])) {
    $fullname = $_POST["full_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $repeat_password = $_POST["repeat_password"];

    $password_hidden = password_hash($password, PASSWORD_DEFAULT);

    $error_message = array();

    if (empty($fullname) OR empty($email) OR empty($password) OR empty($repeat_password)) {
        array_push($error_message, "All fields must be filled!");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($error_message, "Email is not valid.");
    }
    if (strlen($password) < 8) {
        array_push($error_message, "Password must not be less than 8 characters");
    }
    if ($password<>$repeat_password) {
        array_push($error_message, "Password is not identical");
    }
    if (count($error_message) > 0) {
        foreach($error_message as $error) {
            echo $error;
        }
    }
    else {
        //user has successfully signed up
    }

    require_once "connect.php";

    
}
?>