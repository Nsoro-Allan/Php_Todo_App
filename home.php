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

                    <div class="img-cont">
                        
                        <img src="./images/no_task.png" alt="">

                        <h4>No Tasks Available...</h4>
                    </div>

                </div>

                <!-- <div class="content">
                    <div class="title"></div>
                </div> -->
    
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