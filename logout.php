<?php
session_start();
include("connection.php");

unset($_SESSION['todo_user']);

header("Location: login");
?>