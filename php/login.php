<!DOCTYPE html>
<html lang = "en">

<head>
    <title>Login Page</title>
</head>

<body>
    <h3>Sign In</h3>
        <form action = "connect.php" method = "post">

            <label for = "email">Email:</label><br>
            <input type = "email" name = "email" placeholder = "Email" required=""><br><br>

            <label for = "password">Password:</label><br>
            <input type = "password" name = "password" placeholder = "Password" required=""><br><br>

            <input type = "submit" value = "Sign In">

</form>
</div>

<p>Forgot Password? <a href = "#">Reset Here</a></p>
<p>New User? <a href = "registration.php">&nbsp Register</a></p>
</body>

</html>