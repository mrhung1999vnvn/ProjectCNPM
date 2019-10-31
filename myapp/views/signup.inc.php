<?php
    if(isset($_POST['signup-submit'])){
        echo 'hadas';
        require 'dhp.inc.php';

        $username=$_POST['uid'];
        $email=$_POST['mail'];
        $password=$_POST['pwd'];
        $passwordRepeat=$_POST['pwd-repeat'];

        if(empty($username)||empty($email)||empty($password)||empty($passwordRepeat)){
            header("Location:../signup.php?error=emptyfields&uid=".$username."&email=".$email);
            exit();
        }
        else if(!filter_var($email,FILTER_VALIDATE_EMAIL)&& !preg_match("/^[a-zA-Z0-9]*$/",$username)){
            header("Location:../signup.php?error=invalidmailuid=".$username);
            exit();
        }
        else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            header("Location:../signup.php?error=invalidmail&uid=".$username);
            exit();
        }
        else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
            header("Location:../signup.php?error=invaliduid&email=".$email);
            exit();
        }
        else if($password!==$passwordRepeat){
            header("Location:../signup.php?error=passwordcheckuid&email=".$email);
            exit();
        }
        else{
            $sql="SELECT uidUsers FROM users WHERE uidUsers=?";
            $stmt=mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:../views/signup.php?error=sqlerror");
                exit();
            }
            else{
                mysqli_stmt_bind_param($stmt,"s",$username);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultCheck=mysqli_stmt_num_rows($stmt);
                if($resultCheck>0){
                    header("Location:../views/signup.php?error=usertaken&mail=".$email);
                    exit();
                }
                else{
                    $sql="INSERT INTO users(idUsers,uidUsers,emailUsers,pwdUsers) VALUES (2,'$username','$email','$password')";

                    $stmt=mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt,$sql)){
                        header("Location:../views/signup.php?error=sqlerror");
                        exit();
                    }
                    else{
                        $hashedPwd=password_hash($password, PASSWORD_DEFAULT);

                        mysqli_stmt_bind_param($stmt,"sss",$username);
                        mysqli_stmt_execute($stmt);
                        header("Location:../signup.php?signup=success");
                        exit();
                    }
                }
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
    else{
        echo 'hello';
        header("Location:../signup.php");
        exit();
    }
