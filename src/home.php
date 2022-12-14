<?php
    session_start();
    // if(!isset($_SESION['username'])){
    //     header("Location: ./index.php");
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="./css/home_style.css">
    <script defer src="./js/home_js.js"></script>
    <script defer src="./js/test.js"></script>
    <title>LeCon - Home</title>
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
        <div class="left">
            
        </div>
        <div class="center">
            <!-- ========================== -->
            <div class="post">
                <div class="sender">
                    <img src="./images/prince-akachi-.jpg" alt="" class="sender-picture">
                    <div class="about-sender">
                        <div class="sender-name">Prince Akachi</div>
                        <div class="sender-title">Systems Developer | Entelect</div>
                        <div class="time-sent">2 hours ago</div>
                    </div>
                </div>
                <div class="content">
                    <p class="content-msg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex maxime asperiores neque ipsum qui eius nam veniam dignissimos sapiente vel provident, porro maiores, quia non laudantium autem sequi exercitationem aliquam?</p>
                    <img src="./images/grad-studs.jpg" alt="?" class="content-img">
                </div>
                <div class="controls">
                    <button class="like" title="Like"><i class="fa-solid fa-thumbs-up"></i></button>
                    <button class="comment" title="Comment"><i class="fa-solid fa-comment-dots"></i></button>
                    <button class="share" title="Share link"><i class="fa-solid fa-share"></i></button>
                </div>
                <div class="comment-section">
                    <h1 style="font-size: 16px">Comments</h1>
                    <div class="comment">
                        <div class="commenter">
                            <img src="./images/ben-blennerhassett.jpg" alt="?" class="commenter-img">
                            <div class="commenter-details">
                                <div class="commenter-name">Matshidiso Lephoto</div>
                                <div class="commenter-title">Business Analyst | Standard Bank Group</div>
                                <div class="time-commented">2 minutes ago</div>
                            </div>
                        </div>
                        <p class="actual-comment">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit in perspiciatis quisquam dolor optio aliquam amet quaerat repellat, eius tenetur suscipit laborum? Iste libero dolores officia voluptatibus totam ab odit.
                        </p>
                    </div>
                    <div class="comment">
                        <div class="commenter">
                            <img src="./images/prince-akachi-.jpg" alt="?" class="commenter-img">
                            <div class="commenter-details">
                                <div class="commenter-name">Prince Akachi</div>
                                <div class="commenter-title">Systems Developer | Entelect</div>
                                <div class="time-commented">54 seconds ago</div>
                            </div>
                        </div>
                        <p class="actual-comment">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit in perspiciatis quisquam dolor optio aliquam amet quaerat repellat, eius tenetur suscipit laborum? Iste libero dolores officia voluptatibus totam ab odit.
                        </p>
                    </div>
                </div>
            </div>
            <!-- =============================== -->
            <div class="post">
                <div class="sender">
                    <img src="./images/ben-blennerhassett.jpg" alt="" class="sender-picture">
                    <div class="about-sender">
                        <div class="sender-name">Matshidiso Lephoto</div>
                        <div class="sender-title">Business Analyst | Standard Bank Group</div>
                        <div class="time-sent">3 days ago</div>
                    </div>
                </div>
                <div class="content">
                    <p class="content-msg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex maxime asperiores neque ipsum qui eius nam veniam dignissimos sapiente vel provident, porro maiores, quia non laudantium autem sequi exercitationem aliquam?</p>
                    <img src="./images/desola-lanre-ologun.jpg" alt="?" class="content-img">
                </div>
                <div class="controls">
                    <button class="like" title="Like"><i class="fa-solid fa-thumbs-up"></i></button>
                    <button class="comment" title="Comment"><i class="fa-solid fa-comment-dots"></i></button>
                    <button class="share" title="Share link"><i class="fa-solid fa-share"></i></button>
                </div>
            </div>
            <!-- =============================== -->
            <div class="post">
                <div class="sender">
                    <img src="./images/ben-o-bro.jpg" alt="" class="sender-picture">
                    <div class="about-sender">
                        <div class="sender-name">Leornado Mothepu</div>
                        <div class="sender-title">CEO & Founder of BiziSA | BiziSA</div>
                        <div class="time-sent">1 week ago</div>
                    </div>
                </div>
                <div class="content">
                    <p class="content-msg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex maxime asperiores neque ipsum qui eius nam veniam dignissimos sapiente vel provident, porro maiores, quia non laudantium autem sequi exercitationem aliquam?</p>
                    <!-- <img src="/images/grad-studs.jpg" alt="?" class="content-img"> -->
                </div>
                <div class="controls">
                    <button class="like" title="Like"><i class="fa-solid fa-thumbs-up"></i></button>
                    <button class="comment" title="Comment"><i class="fa-solid fa-comment-dots"></i></button>
                    <button class="share" title="Share link"><i class="fa-solid fa-share"></i></button>
                </div>
            </div>
            <!-- =============================== -->
            <div class="post">
                <div class="sender">
                    <img src="./images/ben-o-bro.jpg" alt="" class="sender-picture">
                    <div class="about-sender">
                        <div class="sender-name">Busiyiwe Gwebu</div>
                        <div class="sender-title">Manager | Pep Store</div>
                        <div class="time-sent">23 Minutes ago</div>
                    </div>
                </div>
                <div class="content">
                    <p class="content-msg">Lorem ipsum dolor sit amet consectetur </p>
                    <!-- <img src="/images/grad-studs.jpg" alt="?" class="content-img"> -->
                    <video src="./videos/VID_20220320_185403_903.mkv" class="content-video" controls></video>
                </div>
                <div class="controls">
                    <button class="like" title="Like"><i class="fa-solid fa-thumbs-up"></i></button>
                    <button class="comment" title="Comment"><i class="fa-solid fa-comment-dots"></i></button>
                    <button class="share" title="Share link"><i class="fa-solid fa-share"></i></button>
                </div>
            </div>
            <!-- =============================== -->
        </div>
        <div class="right"></div>
    </div>
</body>
</html>