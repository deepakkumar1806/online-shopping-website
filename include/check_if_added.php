
<?php
//require 'connection.php';

function check_if_addedto_cart($item_id){
    require 'connection.php';
    $uid = $_SESSION['uid'] ;
    $sql="SELECT * from users_items where item_id='$item_id' AND user_id='$uid' AND status='added to cart' ";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        return 1;
    } else{
        return 0;
    }
}

