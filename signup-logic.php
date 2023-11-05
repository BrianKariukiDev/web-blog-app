<?php
    require_once "config/database.php";

    if(isset($_POST['submit'])){
        $firstname=filter_var($_POST['firstname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $lastname=filter_var($_POST['lastname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $username=filter_var($_POST['username'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email=filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
        $createpassword=filter_var($_POST['createpassword'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $confirmpassword=filter_var($_POST['confirmpassword'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $avatar=$_FILES['avatar'];


        if(!$firstname){
            $_SESSION['signup']= "Please enter your firstname";
        }
        elseif(!$lastname){
            $_SESSION['signup']= "Please enter your lastname";
        }
        elseif(!$username){
            $_SESSION['signup']= "Please enter your username";
        }
        elseif(!$email){
            $_SESSION['signup']= "Please enter a valid email";
        }
        elseif(strlen($createpassword)<8|| strlen($confirmpassword)<8){
            $_SESSION['signup']= "Your password should be longer than 8 characters";
        }
        elseif(!$avatar['name']){
            $_SESSION['signup']= "Please add avatar";
        }
        else{
            if($createpassword !== $confirmpassword){
                echo "Passwords do not match";
            }
            else{
                $hashedpassword=password_hash($createpassword,PASSWORD_DEFAULT);
            }

            $usercheck= "SELECT * FROM users WHERE username='$username' OR email='$email'";
            $usercheckresults=mysqli_query($connection,$usercheck);
            if(mysqli_num_rows($usercheckresults)>0){
                $_SESSION['signup']="Username or Email already exists";
            }
            else{
                
            }
        }
    }
    else{
        header('location:' .ROOT_URL.'signup.php');
        die();
    }
?>