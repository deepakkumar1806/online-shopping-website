<?PHP session_start();
 if(!isset($_SESSION['uid'])){
     header("location: signup.php");
     exit();
 }?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist\js\bootstrap.min.js">
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Cart</title>
</head>
<body>
        <?php require "include/navbar.php";
            require "include/connection.php";
        $uid=$_SESSION['uid'];
        $tempty=1;
        $sql="SELECT * from items i join users_items ui 
        on i.pid=ui.item_id where ui.user_id=$uid";

        $result=mysqli_query($conn,$sql); 
        if(mysqli_num_rows($result)==0){
            echo '<div class="container jumbotron self text-danger"><h1><a href="products.php"> Add items to the cart first!</a></h1></div>';
        } else{
               
            $sum=0;$num=1;
            echo  '<div class="container">
            <div class="tbl">
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>';
            while($rows=mysqli_fetch_assoc($result)){
                if($rows['status']=='confirmed'){

                }else{ $tempty=0;
                echo ' <tr>
                <td>'.$num.'</td>
                <td>'.$rows["pname"].'</td>
                <td>'.$rows["price"].'</td>
                <td><a href="cart_remove.php?id='.$rows["pid"].'" class="btn btn-primary" >Remove</a></td>
            </tr>';
            $sum+=$rows['price'];
                $num++;
        }}
        if($tempty==1){
        echo ' <tr>
            <td></td>
            <td>Total</td>
            <td>Rs '.$sum.'/-</td>
            <td><a href="products.php" class="btn btn-primary">Buy Now</a></td>
         </tr>';
        } else{
            echo ' <tr>
            <td></td>
            <td>Total</td>
            <td>Rs '.$sum.'/-</td>
            <td><a href="success.php?id='.$uid.'" class="btn btn-primary">confirm</a></td>
         </tr>';
        }
        echo '</table>
       </div>
      </div>';

      
        }
       
    
        ?>

        
           
        <footer>
                <p><strong>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</strong></p>
            </footer>
           
</body>
</html>