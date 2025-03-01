<!DOCTYPE html>
<html lang = "en">

<head>
    <title>Register User</title>
</head>

<body>
    <div class = "container">
       
        <h3>Register New User</h3>
        <form action = "check_registration.php" method = "post">
            <label for = "name">Full Name:</label><br>
            <input type = "text" name = "full_name" placeholder = "Full Name" required = ""><br><br>

            <label for = "email">Email:</label><br>
            <input type = "email" name = "email" placeholder = "Email" required = ""><br><br>

            <label for = "password">Password:</label><br>
            <input type = "password" name = "password" placeholder = "Password" required = ""><br><br>

            <label for = "repeat_password">Repeat Password:</label><br>
            <input type = "password" name = "repeat_password" placeholder = "Password" required = ""><br>

            <input type = "submit" value = "Sign Up">

</form>
</div>

<p>Already a User? <a href = "login.php">&nbsp Login</a></p>

</body>

</html>