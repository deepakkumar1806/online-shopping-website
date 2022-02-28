<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist\js\bootstrap.min.js">
    <link rel="stylesheet" href="logincss.php">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Log in</title>
</head>
<body>
<?php require "include/navbar.php";?>
    
        <div class="basket">
        <div class="details">
            <h1>Log in</h1>
            <?PHP
                if(isset($_GET['error'])){
                    if($_GET['error']=="emptyfields"){
                        echo '<p class="red">Fill all fields first.</p>';
                    }
                    elseif($_GET['error']=="incorrectpassword"){
                        echo '<p class="red">incorrect password.</p>';
                    }
                }
            ?>
            <div class="container">
            <form action="include/logphp.php" method="post">
                <div class="form-group">
                    <label for="email">Name or Email address:</label>
                    <input type="text" class="form-control" name="namemail">
                </div>

                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" name="password">
                </div>
                
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
            <a href="signup.php" style="margin:1vh;"><p>Don't have an account? Register.</p></a>
        </div>
        </div>
        
        <footer>
                <p><strong>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</strong></p>
            </footer>

             
</body>
</html>