<?PHP
session_start();
require "include/connection.php";
$uid=$_SESSION['uid'];
$item_id=$_GET['id'];
$sql="DELETE from users_items where user_id= $uid and item_id=$item_id";
mysqli_query($conn,$sql);
mysqli_close($conn);
header("location: cart.php");
