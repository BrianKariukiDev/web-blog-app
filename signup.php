<?php
session_start();
require_once 'config/database.php';

// get back sign up data if an error was encountered during signup 
$firstname = $_SESSION['signup-data']['firstname'] ?? null;
$lastname = $_SESSION['signup-data']['lastname'] ?? null;
$username = $_SESSION['signup-data']['username'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;

unset($_SESSION['signup-data']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <section class="form_section">
        <div class="container form_section-container">
            <h2>Sign Up</h2>
            <?php
            if(isset($_SESSION['signup'])): ?>
            <div class="alert_message error">
                <p><?= $_SESSION['signup'];
                    unset($_SESSION['signup']);
                    ?>
                </p>
            </div>
            <?php endif ?>
            <form action="<?= ROOT_URL ?>signup-logic.php" enctype="multipart/form-data" method="post">
                <input type="text" name="firstname" placeholder="First Name" value="<?=$firstname?>">
                <input type="text" name="lastname" placeholder="Last Name" value="<?=$lastname?>">
                <input type="text" name="username" placeholder="User Name" value="<?=$username?>">
                <input type="email" name="email" placeholder="Email" value="<?=$email?>">
                <input type="password" name="createpassword" placeholder="Create Password" value="<?=$createpassword?>">
                <input type="password" name="confirmpassword" placeholder="Confirm Password" value="<?=$confirmpassword?>">
                <div class="form_control">
                    <label for="avatar"></label>
                    <input type="file" name="avatar" id="avatar">
                </div>
                <button type="submit" name="submit" class="btn">Sign Up</button>
                <small>Already have an account? <a href="signin.php">Sign In</a></small>
            </form>
        </div>
    </section>
</body>
</html>
