<?php

if(isset($_POST["login-submit"])){

        require "db.inc.php";
        $username=$_POST["emailid"];
        $password=$_POST["pwdid"];

        if(empty($username)||empty($password))
        {
                header("Location: ../index.php?error=emptyfields");
                exit();
        }
        else{
                $sql="SELECT * FROM users WHERE uidUsers=? OR emailUsers=?";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                        header("Location: ../index.php?error=sqlerror");
                        exit();
                }
                else{
                        mysqli_stmt_bind_param($stmt,"ss",$username,$username);
                        mysqli_stmt_execute($stmt);
                        $result=mysqli_stmt_get_result($stmt);
                        if($row = mysqli_fetch_assoc($result)){
                                $pwdcheck = password_verify($password,$row["pwdUsers"]);
                                if($pwdcheck == false){
                                        header("Location: ../index.php?error=wrongpassword");
                                        exit();
                                }
                                else if($pwdcheck == true){
                                                session_start();
                                                $_SESSION["idUsers"]=$row["idUsers"];

                                                header("Location: ../index.php?login=success");
                                                exit();
                                }
                                else{
                                        header("Location: ../index.php?error=wrongpassword");
                                        exit();
                                }

                        }
                        else{
                                header("Location: ../index.php?error=nouser");
                                exit();
                        }
                }
        }
}
else{
        header("Location: ../index.php");
        exit();
}
