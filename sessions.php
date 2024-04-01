<?php
session_start();
include("connection.php");

if(!isset($_SESSION['todo_user'])){
    header("Location: login?msg=First Loggin...");
}

?>