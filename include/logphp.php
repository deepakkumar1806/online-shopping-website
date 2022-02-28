<?php
if(isset($_POST['submit'])){

    require "connection.php";

    $namemail=$_POST['namemail'];
    $psw=$_POST['password'];

    if(empty($namemail) || empty($psw)){
        header("location: ../login.php?error=emptyfields");
    exit();
    } else{
        $sql="SELECT * from users where username=? or email=?";
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("location: ../login.php?error=stmtconnectionerrorin");
            exit();
        } else{
            mysqli_stmt_bind_param($stmt,"ss",$namemail,$namemail);
            mysqli_stmt_execute($stmt);
            $result=mysqli_stmt_get_result($stmt);
            if($row=mysqli_fetch_assoc($result)){
                $pswcheck=password_verify($psw,$row['password']);
                if($pswcheck==false){
                    header("location: ../login.php?error=incorrectpassword");
                    exit();
                } elseif($pswcheck==true){
                    session_start();
                    $_SESSION['username']=$row['username'];
                    $_SESSION['uid']=$row['id'];
                    header("location: ../index.php?login=success");
                    exit();
                } else{
                    header("location: ../login.php?error=incorrectpassword");
                    exit();
                }
            } else{
                header("location: ../login.php?error=nouser");
                exit();
            }
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

} else{
    header("location: ../signup.php?error=loginfirst");
    exit();
}
?>