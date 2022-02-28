<?php
if(isset($_POST['submit'])){
    require "connection.php";
 //initializing variables 
$username=$_POST['username'];
$email=$_POST['email'];
$psw=$_POST['password'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$address=$_POST['address'];
//error handler for empty fields
if(empty($username) || empty($email) || empty($psw) || empty($contact) || empty($city) || empty($address)){
   header("location: ../signup.php?error=emptyfields");
   exit(); 
} //error handler for invalid username
elseif(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
    header("location: ../signup.php?error=invalidusername");
   exit(); 
} //error handler for invalid email
elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    header("location: ../signup.php?error=invalidemail");
    exit(); 
} //error handler if username  already exist
else{
    $sql="SELECT username from users where username=?";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../signup.php?error=stmtconnectionfailed");
    exit(); 
    } else{
        mysqli_stmt_bind_param($stmt,"s",$username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $row=mysqli_stmt_num_rows($stmt);
        if($row>0){
            header("location: ../signup.php?error=usernamealreadytaken");
            exit(); 
        } else{
           $sql="INSERT into users(username,email,password,contact,city,address)
            values(?,?,?,?,?,?)"; 
            $stmt=mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("location: ../signup.php?error=stmtconnectionfailed");
                exit(); 
            } else{
                $hashedpsw=password_hash($psw,PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt,"sssiss",$username,$email,$hashedpsw,$contact,$city,$address);
                mysqli_stmt_execute($stmt);
                header("location: ../login.php?signup=success");
                exit(); 
            }
        }

    }
}
mysqli_stmt_close($stmt);
mysqli_close($conn);  
} 
?>