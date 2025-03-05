<?php

//when i submit my form
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password_hidden = password_hash($password, PASSWORD_DEFAULT);

    $error_message = array();

    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($error_message, "Email is not valid.");
    }
    if (strlen($password) < 8) {
        array_push($error_message, "Password must not be less than 8 characters");
    }
    if (count($error_message) > 0) {
        foreach ($error_message as $error) {
            echo $error;
        }
    } else {
        //user has successfully signed up
        require_once "connect.php";
        $sql = $conn->prepare("SELECT * FROM users WHERE Email = ? AND Password = ?");
        $sql->bind_param("ss", $email, $password_hidden);
        if ($sql->execute() === TRUE) {
            echo "Logged in successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $sql->close();
        header('Location: http://localhost:8080/html/index_page.html');
        exit;
    }
}
?>