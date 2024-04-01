<?php
session_start();
include("connection.php");

if(isset($_POST['login'])){
    $username=mysqli_real_escape_string($con, $_POST['username']);
    $password=mysqli_real_escape_string($con, $_POST['password']);

    $login=$con->query("SELECT * FROM `users`");

    if(mysqli_num_rows($login) > 0){

        while($row=mysqli_fetch_assoc($login)){

            if($username == $row['username'] && $password == $row['password']){
                $_SESSION['todo_user']=$username;
                header("Location: home");
            }

            else if($username != $row['username'] && $password == $row['password']){
                echo
                "
                    <script>alert('Invalid Username...')</script>
                ";
            }

            else if($username == $row['username'] && $password != $row['password']){
                echo
                "
                    <script>alert('Invalid Password...')</script>
                ";
            }

            else{
                echo
                "
                    <script>alert('Invalid Username and Password...')</script>
                ";
            }

        }
    }
    else{
        echo
        "
            <script>alert('No user found...')</script>
        ";
    }

}

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

            <div class="title">
                <img src="./images/icon.ico" alt="">
                <h1>To-do App</h1>
            </div>

            <form action="" method="post">

                <label>Username:</label>
                <input type="text" name="username" placeholder="Enter your username..." required>

                <label>Password:</label>
                <input type="password" name="password" placeholder="Enter your username..." required>

                <button type="submit" name="login">Login Here...</button>

                <p>Don't have an account ? <a href="./register">Register.</a></p>

            </form>

        </div>

    </div>

</body>
</html>