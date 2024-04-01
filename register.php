<?php
include("connection.php");

if(isset($_POST['register'])){
$username=mysqli_real_escape_string($con, $_POST['username']);
$password=mysqli_real_escape_string($con, $_POST['password']);
$gender=mysqli_real_escape_string($con, $_POST['gender']);
$tel=mysqli_real_escape_string($con, $_POST['tel']);

if($gender != "Select your gender..."){
    $register=$con->query("INSERT INTO `users`(`user_id`, `username`, `password`, `gender`, `tel`) VALUES ('','$username','$password','$gender','$tel')");
    if($register){
        header("Location: login");
    }
    else{
        echo
        "
            <script>alert('Failed to create new account...')</script>
        ";
    }
}

else{
    echo
    "
        <script>alert('Please select your gender...')</script>
    ";
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App - Register</title>
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

                <label>Gender:</label>
                <select name="gender">
                    <option value="Select your gender...">Select your gender...</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>

                <label>Tel:</label>
                <input type="tel" name="tel" placeholder="Enter your tel..." required>

                <button type="submit" name="register">Register Here...</button>

                <p>Already have an account ? <a href="./login">Login.</a></p>

            </form>

        </div>

    </div>

</body>
</html>