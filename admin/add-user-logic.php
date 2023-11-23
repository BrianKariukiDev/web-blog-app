<?php
    require '../config/database.php';

    if(isset($_POST['submit'])){
        $firstname=filter_var($_POST['firstname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $lastname=filter_var($_POST['lastname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $username=filter_var($_POST['username'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email=filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
        $createpassword=filter_var($_POST['createpassword'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $confirmpassword=filter_var($_POST['confirmpassword'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $is_admin=filter_var($_POST['userrole'],FILTER_SANITIZE_NUMBER_INT);
        $avatar=$_FILES['avatar'];


        if(!$firstname){
            $_SESSION['add-user']= "Please enter your firstname";
        }
        elseif(!$lastname){
            $_SESSION['add-user']= "Please enter your lastname";
        }
        elseif(!$username){
            $_SESSION['add-user']= "Please enter your username";
        }
        elseif(!$email){
            $_SESSION['add-user']= "Please enter a valid email";
        }
        elseif(strlen($createpassword)<8|| strlen($confirmpassword)<8){
            $_SESSION['add-user']= "Your password should be longer than 8 characters";
        }
        elseif(!$avatar['name']){
            $_SESSION['add-user']= "Please add avatar";
        }else{
            if($createpassword !== $confirmpassword){
                $_SESSION['add-user']="Passwords do not match";
            }else{
                $hashedpassword=password_hash($createpassword,PASSWORD_DEFAULT);
            }

            $usercheck= "SELECT * FROM users WHERE username='$username' OR email='$email'";
            $usercheckresults=mysqli_query($conn,$usercheck);
            if(mysqli_num_rows($usercheckresults)>0){
                $_SESSION['add-user']="Username or Email already exists";
            }else{
                $time=time();
                $avatar_name= $time.$avatar['name'];
                $avatar_temp_name=$avatar["tmp_name"];
                $avatar_destination_path= '../images2/'. $avatar_name;

                $allowed_files=['png','jpg','jpeg'];
                $extension=explode('.',$avatar_name);
                $extension=end($extension);
                if(in_array($extension,$allowed_files)){
                    if($avatar['size']<1100000){
                        move_uploaded_file($avatar_temp_name,$avatar_destination_path);
                    }else{
                        $_SESSION['add-user']= "File size should be less than 1mb";
                    }
                }else{
                    $_SESSION['add-user']="File should be in png,jpg or jpeg form"; 
                }
            }
        }
        
        // redirect to sign up page if error
        if(isset($_SESSION['add-user'])){
            unlink($avatar_destination_path);
            // session to pass back the data keyed in 
            $_SESSION['add-user-data']= $_POST;
            header('location:'.ROOT_URL.'admin/add-user.php');
            die();
        }else{
            // insert to databasse
            $insert_user_query="INSERT INTO users (firstname,lastname,username,email,password,avatar,is_admin) VALUES('$firstname','$lastname','$username','$email','$hashedpassword','$avatar_name','$is_admin')";
            mysqli_query($conn,$insert_user_query);

            if(!mysqli_errno($conn)){
                $_SESSION['add-user-success']= "$firstname was successfully added.";
                header('location:'.ROOT_URL.'admin/manage-users.php');
                die();
            }
        }

    }else{
        header('location:'. ROOT_URL.'admin/add-user.php)');
        die();
    }