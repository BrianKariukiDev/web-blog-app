<?php
    include_once "partials/header.php";

    $firstname=$_SESSION['add-user-data']['firstname'] ?? NULL;
    $lastname=$_SESSION['add-user-data']['lastname'] ?? null;
    $username=$_SESSION['add-user-data']['username'] ?? null;
    $email=$_SESSION['add-user-data']['email'] ?? null;
    $createpassword=$_SESSION['add-user-data']['createpassword'] ?? null;
    $confirmpassword=$_SESSION['add-user-data']['confirmpassword'] ?? null;

    unset($_SESSION['add-user-data']);
?>

    <section class="form_section">
        <div class="container form_section-container">
            <h2>Add User</h2>
            <?php
                if(isset($_SESSION['add-user'])): ?>
            <div class="alert_message error">
                <p><?=$_SESSION['add-user'];
                unset($_SESSION['add-user'])?></p>
            </div>
            <?php endif?>
            <form action="<?= ROOT_URL ?>admin/add-user-logic.php" enctype="multipart/form-data" method="post">
                <input type="text" placeholder="First Name" name="firstname" value="<?=$firstname?>">
                <input type="text" placeholder="Last Name" name="lastname" value="<?=$lastname?>">
                <input type="text" placeholder="User Name" name="username" value="<?=$username?>">
                <input type="email" placeholder="Email" name="email" value="<?=$email?>">
                <input type="password" placeholder="Create Password" name="createpassword" value="<?=$createpassword?>">
                <input type="password" placeholder="Confirm Password" name="confirmpassword" value="<?=$confirmpassword?>">
                <select name="userrole" id="">
                    <option value="0">Author</option>
                    <option value="1">Admin</option>
                </select>
                <div class="form_control">
                    <label for="avatar"></label>
                    <input type="file" id="avatar" name="avatar">
                </div>
                <button type="submit" class="btn" name="submit">Sign Up</button>
            </form>
        </div>
    </section>


    
    <?php
    include_once "partials/footer.php";
?>