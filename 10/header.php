<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styles\style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

    </style>

    <script src="https://kit.fontawesome.com/fb07f5d177.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<?php session_start();?>
<body>
    <!-- header -->

    <div class="header-main">
        <a href="sorooshlib.php" class="logo">
            <img class="slogo" src="assets/header-logo.png" height="30%" width="30%">
        </a>
        <div class="header-left">
            <!-- <div class="search-box">
                <input class="search-bar" type="text" placeholder="...جستو جو">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div> -->
        </div>
    </div>



    
    <!-- side bar -->
    <div class="side-nav">
        <a class="login" href="login.php">ورود / ثبت نام</a>
        <a href="sorooshlib.php">صفحه اصلی</a>
        <?php
        if (isset($_SESSION['state_login']) && $_SESSION['state_login'] === true) {
        ?>
            <a href="logout.php">               
                خروج از سایت
            </a>
        <?php
        } else {
        ?>
        <?php
        }
        ?>
        <a href="about.php">
            درباره ما
        </a>
        <a href="contact.php">
            ارتباط با ما
        </a>
    </div>