<?php
    require_once "dhp.inc.php";

    $username=$password=$confirmpass="";
    $username_err=$password_err=$confirm_password_err="";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty(trim($_POST["mailuid"]))){
            $username_err="Please enter your username";
        }
        else{
            $username=trim($_POST["mailuid"]);
            $sql="SELECT * FROM users WHERE uidUsers=?";
        }

        if(empty(trim($_POST["password"]))){
            $password_err="Please enter your password";
        }
        else{
            $password=$_POST["password"];
        }

        //Validate Value
        if(empty($username_err) &&empty($password_err)){
            $sql="SELECT * from users WHERE uidUsers=?";

            if($stmt=mysqli_prepare($sql)){
                $stmt->bind_param("s",$param_username);

                $param_username=$username;

                if($stmt->execute()){
                    $stmt->store_result();


                    if($stmt->num_rows==1){
                        //Bind result
                        $stmt->bind_result($id,$username,$hashed_password);
                        if($stmt->fetch()){
                            if(password_verify($password,$hashed_password)){
                                session_start();

                                $_SESSION["loggedIn"]=true;
                                $_SESSION["id"]=$id;
                                $_SESSION["username"]=$username;

                                header("location: welcome.php");
                            }
                            else{
                                $password_err="The password you entered was not valid";
                            }
                        }
                    }
                    else{
                        $username_err="No account found with that username";
                    }
                }
                else{
                    echo "Something went wrong!!!!";
                }
            }
        }
    }
?>
    