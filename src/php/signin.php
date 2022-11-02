<?php
session_start();
require "./db_conn.php";
if(isset($_POST['signin'])){
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    
    $query = "SELECT username, pwd FROM users WHERE username = '$email' AND pwd = '$pwd'";
    $result = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $result['username'];
    header("Location: ../home.php");
    exit();
}