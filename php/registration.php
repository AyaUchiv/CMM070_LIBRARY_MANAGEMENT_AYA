<?php
require_once "connect.php";
$sql = $conn->prepare("INSERT INTO users (Name, Email, Password)
                VALUES (?, ?, ?)");
$sql->bind_param("sss", $fullname, $email, $password_hidden);
if ($sql->execute() === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql->error . "<br>" . $conn->error;
}
$sql->close();
header('Location: http://localhost:8080/html/login.html');
exit;

?>