<?php
//connecting to the connect.php and inserting variables into the database
            $sql_db = "INSERT INTO registration (full_name, email, password) VALUES(?,?,?)";
            //initializing the statement where we connected the database
            $stmt = mysqli_stmt_init($connection);

            //check if connection has been made and if so add the details to the database.

            //the use of "sss" because we are inputing three details to the database
            if (mysqli_stmt_prepare($stmt, $sql_db)) {
                mysqli_stmt_bind_param($stmt, "sss", $fullname, $email, $password_hidden);
                mysqli_stmt_execute($stmt);
                echo "Registration Successful";
            }
            else {
                die("Something went wrong. Try again!"); 
            }
            ?>
