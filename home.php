<?php
include("sessions.php");
include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App - Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./images/icon.ico" type="image/x-icon">
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['todo_user'];?></h1>
    <a href="./logout">Logout</a>
</body>
</html>