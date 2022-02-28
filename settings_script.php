<?PHP
session_start();
if(!isset($_SESSION['uid'])){ 
    header("location:index.php");
    exit();
} 
require "include/connection.php";
$old=$_POST['oldpsw'];
$new=$_POST['newpsw'];
$renew=$_POST['renewpsw'];
$uid=$_SESSION['uid'];

if(empty($old) || empty($new) || empty($renew)){
    header("location:settings.php?error=emptyfields");
    exit();
} elseif($new!==$renew){
    header("location: settings.php?error=passwordmismatch");
    exit();
} else{ 
    $sql="SELECT * from users where id=$uid";
    $result= mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $pswcheck= password_verify($old,$row['password']);
    if($pswcheck==false){
        header("location:settings.php?error=wrongpassword");
        exit();
    } else{ 
        $hashedpsw=password_hash($new,PASSWORD_DEFAULT);
        $sql="UPDATE users set password='$hashedpsw' where id=$uid";
        if(mysqli_query($conn,$sql)){ 
            header("location:settings.php?success=done");
            exit();
        }else{
            echo "error".mysqli_error($conn);
        }
    }
}
