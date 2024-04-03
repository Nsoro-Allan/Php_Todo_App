<?php
include("sessions.php");
include("connection.php");

$session_name=$_SESSION['todo_user'];
$view=$con->query("SELECT * FROM `users` WHERE `username`='$session_name'");
while($data=mysqli_fetch_assoc($view)){
    $u_id=$data['user_id'];
}

// Add Task
if(isset($_POST['add_task'])){
    $user_id=$u_id;
    $task_name=mysqli_real_escape_string($con,$_POST['task_name']);
    $completed=0;
    $created_at=date('Y-m-d H:i:s');

    $insert=$con->query("INSERT INTO `tasks`(`task_id`, `user_id`, `task_name`, `completed`, `created_at`) VALUES ('','$user_id','$task_name','$completed','$created_at')");

    if($insert){
        header("Location: home");
    }

    else{
        echo
        "
            <script>alert('Failed to add new task...')</script>
        ";
    }

}


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

                <?php
                $select=$con->query("SELECT * FROM `tasks` WHERE `user_id`='$u_id'");

                if(mysqli_num_rows($select) > 0){

                while($row=mysqli_fetch_assoc($select)){    

                ?>

                <div class="main-content">

                    <div class="start">
                        <form action="">
                            <input type="checkbox" name="done">
                        </form>
                    </div>

                    <div class="middle">
                        <h4><?php echo $row['task_name'];?></h4>
                    </div>

                    <div class="stop">
                        <a href="delete_task?task_id=<?php echo$row['task_id'];?>"><img src="./images/delete.ico"></a>
                    </div>

                </div>

                <?php    
                }
                }

                else{
                ?>    

                    <div class="content">

                    <div class="img-cont">
                        
                        <img src="./images/no_task.png" alt="">

                        <h4>No Tasks Available...</h4>
                    </div>

                    </div>
                  
                <?php  
                }
                ?>
    
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