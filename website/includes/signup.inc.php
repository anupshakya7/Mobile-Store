<?php

if(isset($_POST['signup-submit'])){

    require "dbh.inc.php";

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if(empty($username) || empty($email) || empty($password) || empty($confirmPassword)){
        header("Location: ../signup.php?signup=empty");
        exit();
    }else{
        if(!preg_match('/^[a-zA-Z]*$/',$username) && !filter_var($email,FILTER_VALIDATE_EMAIL)){
            header("Location: ../signup.php?signup=bothusernameandemailinvalid");
            exit();
        }else{
        if(!preg_match('/^[a-zA-Z]*$/',$username)){
            header("Location: ../signup.php?signup=invalidusername");
            exit();
        }
        else{
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                header("Location: ../signup.php?signup=invalidEmail");
                exit();
            }else{
                if($password < 6){
                    header("Location: ../signup.php?signup=tooshortpassword");
                    exit();
                }else{
                    if($password !== $confirmPassword){
                        header("Location: ../signup.php?signup=passwordnotmatch");
                        exit();
                    }else{
                       $sql = "SELECT email FROM user WHERE email=?";
                       $stmt = mysqli_stmt_init($conn);

                       if(!mysqli_stmt_prepare($stmt,$sql)){
                           header("Location: ../signup.php?signup=sqlError");
                           exit();
                       }else{
                           mysqli_stmt_bind_param($stmt,"s",$email);
                           mysqli_stmt_execute($stmt);
                           mysqli_stmt_store_result($stmt);
                           $resultCheck = mysqli_stmt_num_rows($stmt);
                           if($resultCheck > 0){
                               header("Location: ../signup.php?signup=usernameAlreadyTaken");
                               exit();
                           }else{
                               $sql = "INSERT INTO user (username, email, password) VALUES (?,?,?)";
                               $stmt = mysqli_stmt_init($conn);
                               if(!mysqli_stmt_prepare($stmt,$sql)){
                                   header("Location: ../signup.php?signup=sqlError");
                                   exit();
                               }else{
                                   $hashPassword = password_hash($password,PASSWORD_DEFAULT);
                                   mysqli_stmt_bind_param($stmt,"sss",$username,$email,$hashPassword);
                                   mysqli_stmt_execute($stmt);
                                   header("Location: ../signup.php?signup=success");
                                   exit();
                               }

                           }
                           

                       }
                    }
                    mysqli_stmt_close($stmt);
                    mysqli_close($conn);
                }
            }
        }
    }
    }

}else{
    header("Location: ..signup.php");
    exit();
}