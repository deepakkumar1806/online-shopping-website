<?PHP
session_start();
require "include/connection.php";
$item_id=$_GET['id'];
$uid=$_SESSION['uid'];
$sql="INSERT into users_items(user_id,item_id,status)
    Value($uid,$item_id,'added to cart') ";
    mysqli_query($conn,$sql);
    header("location: products.php");
    mysqli_close($conn);
    