<?php
    // session_start();
    require_once 'config/database.php';

    $username_email=$_SESSION['signin-data']['username_email'] ?? null;
    $password=$_SESSION['signin-data']['password'] ?? null;

    unset($_SESSION['signin-data']);
?>
<!DOCTYPE html>
<html
 lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <section class="form_section">
        <div class="container form_section-container">
            <h2>Sign In</h2>
            <?php
            if(isset($_SESSION['signup-success'])): ?>
            <div class="alert_message success">
                <p><?= $_SESSION['signup-success'];
                    unset($_SESSION['signup-success']);
                    ?>
                </p>
            </div>
            <?php endif ?>
            <?php
            if(isset($_SESSION['signin'])): ?>
            <div class="alert_message error">
                <p>
                    <?=$_SESSION['signin'];
                    unset($_SESSION['signin']);
                    ?>
                </p>
            </div>
            <?php endif ?>
            <form action="<?= ROOT_URL ?>signin-logic.php" method="post">
                <input type="text" placeholder="User Name or Email" name="username_email" value="<?= $username_email ?>">
                <input type="password" placeholder="Password" name="password" value="<?=$password?>">
                <button type="submit" class="btn" name="submit">Sign In</button>
                <small>Don't have an account? <a href="signup.php">Sign Up</a></small>
            </form>
        </div>
    </section>
</body>
</html>
