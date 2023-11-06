<?php
session_start();
require_once "config/constants.php";
require_once "config/database.php";

// fetch user from db 
if(isset($_SESSION['user-id'])){
    $id= filter_var($_SESSION['user-id'],FILTER_SANITIZE_NUMBER_INT);
    $query="SELECT avatar from users WHERE id=$id";
    $result=mysqli_query($conn,$query);
    $avatar=mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog site</title>
    <link rel="stylesheet" href="CSS/style.css">
    <style src="index.js" defer></style>
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="js/main.js" defer></script>
</head>
<body>
    <nav>
        <div class="container nav_container">
            <a href="index.php" class="nav_logo">INCOGNITO</a>
            <ul class="nav_items">
                <li><a href="<?= ROOT_URL?>blog.php">Blog</a></li>
                <li><a href="<?= ROOT_URL?>about.php">About</a></li>
                <li><a href="<?= ROOT_URL?>services.php">Services</a></li>
                <li><a href="<?= ROOT_URL?>contact.php">Contact</a></li>
                <?php
                if(isset($_SESSION['user-id'])): ?>
                <li class="nav_profile">
                    <div class="avatar">
                    <img src="<?=ROOT_URL . 'images/' .$avatar['avatar'] ?>" alt="">
                    </div>
                    <ul>
                        <li><a href="<?= ROOT_URL?>admin/index.php">Dashboard</a></li>
                        <li><a href="<?= ROOT_URL?>logout.php">Log out</a></li>
                    </ul>
                </li>
                <?php else : ?>
                <li><a href="<?=ROOT_URL?>signin.php">Signin</a></li>
                <?php endif ?>
            </ul>
                    <button id="open_nav-btn"><i class="fa-solid fa-bars"></i></button>
                    <button id="close_nav-btn"><i class="fa-solid fa-xmark"></i></button>
        </div>
    </nav>
    <!-- NAV END -->
