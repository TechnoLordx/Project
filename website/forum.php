<?php

session_start();

if(!isset($_SESSION['username'])){
    header("Location: lsindex.php");
}

?>

<!DOCTYPE html>
<html lang="en" class="forum">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- keywords, discriptin, ... -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <title>TECH CHAT</title>
    <link rel="stylesheet" href="style/styles.css"/>
</head>
<body>
    <nav class="navbar">
        <div class="navbar__container">
            <a href="/" id="nav__logo">TECH CHAT</a>
            <div class="navbar__change" id="mobile">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="wiki.php" class="navbar__links">Wiki</a>
                </li>
                <li class="navbar__item">
                    <a href="forum.php" class="navbar__links">Forum</a>
                </li>
                <li class="navbar__btn">
                    <a href="exit.php" class="button">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>
    <script type="text/javascript" src="javascript/do.js"></script>

    <div class="from__container">
        <div class="content">  </div>

         <!-- commnet section start  -->
         
    </div>
</body>
</html>