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
    <div class="main-container">

        <div class="container">

            <div class="head">

                <h1>Welcome, <?php echo $_SESSION['todo_user'];?></h1>
                <a href="./logout">Logout</a>

            </div>

            <div class="content-container">

                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, sequi. Fugiat distinctio fuga vitae veniam, beatae voluptatem animi aliquid, dolorem natus, magnam ipsam dolores suscipit. Dolorum totam aliquam deserunt accusantium.</p>
                </div>
    
            </div>

            <div class="end">

                <form action="" method="post">
                    <input type="text" name="task_name" placeholder="Enter your task name..." required>
                    <button type="submit" name="add_task">Add Task...</button>
                </form>

            </div>

        </div>

    </div>
</body>
</html>