<?php

if(isset($_POST['login-submit'])){

    require 'dbh.inc.php';

    $username1 = $_POST['email1'];
    $password1 = $_POST['password1'];

    if(empty($username1) || empty($password1)){
        header("Location: ../account.php?account=emptyfields");
        exit();
    }else{
        $sql = "SELECT * FROM user WHERE email=? OR username=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../account.php?account=sqlerror");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt,"ss",$username1,$username1);
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                $passwordCheck = password_verify($password1,$row['password']);
                if ($passwordCheck == false) {
                    header("Location: ../account.php?account=wrongPassword");
                    exit();
                }else if($passwordCheck == true){
                    session_start();
                    $_SESSION['usersId']=$row['usersId'];
                    $_SESSION['email']=$row['email'];

                    header("Location: ../index.php?login=success");
                    exit();
                }
            }
            else{
                header("Location: account.php?account=nouser");
                exit();
            }

        }
    }


}else{

    header("Location: ../index.php");
    exit();

}