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

                <div class="main-content">

                    <div class="start">
                        <form action="">
                            <input type="checkbox" name="done">
                        </form>
                    </div>

                    <div class="middle">
                        <h4>Coding Today...</h4>
                    </div>

                    <div class="stop">
                        <a href="#"><img src="./images/delete.ico"></a>
                    </div>

                </div>

                <div class="main-content">

                    <div class="start">
                        <form action="">
                            <input type="checkbox" name="done">
                        </form>
                    </div>

                    <div class="middle">
                        <h4>Do Body Workout...</h4>
                    </div>

                    <div class="stop">
                        <a href="#"><img src="./images/delete.ico"></a>
                    </div>

                </div>

                <div class="main-content">

                    <div class="start">
                        <form action="">
                            <input type="checkbox" name="done">
                        </form>
                    </div>

                    <div class="middle">
                        <h4>Go to Church...</h4>
                    </div>

                    <div class="stop">
                        <a href="#"><img src="./images/delete.ico"></a>
                    </div>

                </div>

                <div class="main-content">

                    <div class="start">
                        <form action="">
                            <input type="checkbox" name="done">
                        </form>
                    </div>

                    <div class="middle">
                        <h4>Go to a meeting...</h4>
                    </div>

                    <div class="stop">
                        <a href="#"><img src="./images/delete.ico"></a>
                    </div>

                </div>

                <!-- <div class="content">

                    <div class="img-cont">
                        
                        <img src="./images/no_task.png" alt="">

                        <h4>No Tasks Available...</h4>
                    </div>

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