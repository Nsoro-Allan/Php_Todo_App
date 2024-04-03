<?php
include("sessions.php");
include("connection.php");

$task_id=$_GET['task_id'];

$delete=$con->query("DELETE FROM `tasks` WHERE `task_id`='$task_id'");

if($delete){
    header("location: home");
}

else {
    header("location: home?msg=Failed to delete task...");
}


?>