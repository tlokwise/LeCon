<?php
require "./php/db_conn.php";
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: ./index.php");
    }
    $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="./css/home_style.css">
    <link rel="stylesheet" href="./css/messages.css">
    <script defer src="./js/messages.js"></script>
    <title>Messages</title>
</head>
<body>
    <div class="nav">
        <div class="nav-left">
            <h1 class="logo">||| Le<span class="lecon">Con |||</span></h1>
        </div>
        
        <div class="nav-center">
            <button id="home" title="Home"><i class="fa-solid fa-house-chimney"></i></button>
            <button id="messagesBtn" title="Messages"><i class="fa-solid fa-message"></i></button>
            <button title="Groups"><i class="fa-solid fa-people-group"></i></button>
            <button title="News"><i class="fa-solid fa-newspaper"></i></button>
            <button title="Notification"><i class="fa-solid fa-bell"></i></button>
        </div>
        
        <div class="nav-right">
            <input type="search" name="search-bar" id="search-bar" placeholder="Search">
            <button title="Menu" id="menu"><i class="fa-solid fa-bars"></i></button>
            <div class="drop-down">
                <ul>
                    <li id="profile"><i class="fa-solid fa-user"></i> Profile</li>
                    <li><i class="fa-solid fa-circle-info"></i>Account information</li>
                    <li><i class="fa-solid fa-gears"></i>Settings & Privacy</li>
                    <li><i class="fa-solid fa-t"></i> Terms of Use</li>
                    <li><i class="fa-solid fa-right-from-bracket"></i> Logout</li>
                </ul>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="center">
            <input type="search" name="search-messages" id="search-messages" placeholder="Search messages">
            <div class="online-friends"></div>

            <div class="messanger">
                <img  class="messanger-profile" src="./images/ben-blennerhassett.jpg" alt="No Profile">
                <span class="messanger-name">Ben Blennerhassett</span>
                <span class="prev-msg">Hello there</span>
            </div>

        <?php

            $getuser = "SELECT * FROM chat WHERE user1 = '$username' OR user2 = '$username'";
            $user1 = mysqli_query($conn, $getuser);
            $user1 = mysqli_fetch_assoc($user1);
            print_r($user1);

                echo "<div class='messanger'>
                <img  class='messanger-profile' src='./images/ben-blennerhassett.jpg' alt='No Profile'>
                <span class='messanger-name'>Ben Blennerhassett</span>
                <span class='prev-msg'>Hello there</span>
                </div>";
        ?>


            <!-- <div class="messanger">
                <img  class="messanger-profile" src="./images/prince-akachi-.jpg" alt="No Profile">
                <span class="messanger-name">Ben Blennerhassett</span>
                <span class="prev-msg">Hello there</span>
            </div>
            <div class="messanger">
                <img  class="messanger-profile" src="./images/desola-lanre-ologun.jpg" alt="No Profile">
                <span class="messanger-name">Ben Blennerhassett</span>
                <span class="prev-msg">Hello there</span>
            </div>
            <div class="messanger">
                <img class="messanger-profile" src="./images/ben-o-bro.jpg" alt="No Profile">
                <span class="messanger-name">Ben Blennerhassett</span>
                <span class="prev-msg">Hello there</span>
            </div> -->
        </div>
    </div>
</body>
</html>