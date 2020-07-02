<?php

if(isset($_POST["signup-submit"])){

        require "db.inc.php";

        $username=$_POST["usid"];
        $mailid=$_POST["emailid"];
        $password=$_POST["pwdid1"];
        $passwordrepeat=$_POST["pwdid2"];
        
        //if user value is empty
        if(empty($username)||empty($mailid)||empty($password)||empty($passwordrepeat)){
                header("Location: ../signup.php?error=emptyfields&usid=".$username."&emailid=".$mailid);
                exit();
        }
        //if user inputs both bullshit mail and bullshit user name
        elseif(!filter_var($mailid,FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z0-9]*$/",$username)){
                header("Location: ../signup.php?error=invalidemailandusername&usid=&emailid=");
                exit();
        }
        //if user inputs bullshit mail 
        elseif(!filter_var($mailid,FILTER_VALIDATE_EMAIL)){
                header("Location: ../signup.php?error=invalidemail&usid=".$username."&emailid=");
                exit();
        }
        //if user inputs bullshit username
        elseif(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
                header("Location: ../signup.php?error=invalideusername&usid=&emailid=".$mailid);
                exit();
        }
        //if user inputs different password in password field
        elseif($password!==$passwordrepeat){
                header("Location: ../signup.php?error=passwordmismatch&usid=".$username."&emailid=".$mailid);
                exit(); 
        }
        //all the sql connection errors
        else{
                //we can input $username directly but some mofo can write  code in input field and destroy the db
                $sql = "SELECT uidUsers FROM users where uidUsers=?";
                $stmt = mysqli_stmt_init($conn);
                //if connection is not established or db.inc.php is not properly included
                if(!mysqli_stmt_prepare($stmt,$sql)){
                        header("Location: ../signup.php?error=sqlerror");
                        exit(); 
                }
                
                else{
                        mysqli_stmt_bind_param($stmt,"s",$username);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_store_result($stmt);
                        $resultcheck = mysqli_stmt_num_rows($stmt);
                        //if the username is already being used
                        if($resultcheck>0)
                        {
                                header("Location: ../signup.php?error=usertaken&emailid=".$mailid);
                                exit(); 
                        }
                        //insert the values into the table
                        else
                        {
                                $sql="INSERT INTO users(uidUsers,emailUsers,pwdUsers) VALUES(?,?,?)";
                                $stmt = mysqli_stmt_init($conn);
                                if(!mysqli_stmt_prepare($stmt,$sql)){
                                        header("Location: ../signup.php?error=sqlerror");
                                        exit(); 
                                }
                                else{
                                        //hashing tha password ,note : md5 or sha256 is outdated use bcypt (ehich will be default here)
                                        $hashPwd = password_hash($password,PASSWORD_DEFAULT);
                                        mysqli_stmt_bind_param($stmt,"sss",$username,$mailid,$hashPwd);
                                        mysqli_stmt_execute($stmt);
                                        //mysqli_stmt_store_result($stmt);(fetching data from db)
                                        header("Location: ../signup.php?signup=success");
                                        exit(); 
                                }
                        }
                }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
} 
else{
        header("Location: ../signup.php");
        exit(); 
}
