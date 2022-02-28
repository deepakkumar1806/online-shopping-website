<?PHP session_start();
if(!isset($_SESSION['uid'])){
    header("location: index.php");
    exit();
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist\js\bootstrap.min.js">
    <link rel="stylesheet" href="success.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Success</title>
</head>
<body>
    <?php require "include/navbar.php";
        require "include/connection.php";
        $uid=$_SESSION['uid'];
        $sql="UPDATE users_items set status='confirmed' where user_id=$uid ";   
        mysqli_query($conn,$sql);
        
    ?>
    
    <div class="container">
        <div class="alert alert-success">
        <h1 class="text-success">Thank you for shopping
            with us. <a href="products.php">Click here</a> to purchase any other item.</h1>
    </div>
    </div>

    <footer>
            <p><strong>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</strong></p>
        </footer>
</body>
</html>