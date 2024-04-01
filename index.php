<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App - Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./images/icon.ico" type="image/x-icon">
</head>
<body>

    <div class="form-container">

        <div class="form-left">
            <img src="./images/img.jpg" alt="">
        </div>

        <div class="form-right">

            <form action="" method="post">

                <label>Username:</label>
                <input type="text" name="username" placeholder="Enter your username..." required>

                <label>Password:</label>
                <input type="password" name="username" placeholder="Enter your username..." required>

                <button type="submit" name="login">Login...</button>

                <p>Don't have an account ? <a href="./register">Register</a></p>

            </form>

        </div>

    </div>

</body>
</html>