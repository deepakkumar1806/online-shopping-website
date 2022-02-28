<?PHP session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist\js\bootstrap.min.js">
    <link rel="stylesheet" href="signupcss.php">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>sign up</title>
</head>
<body>
<?php require "include/navbar.php";?>

    <div class="bigboss">
        <div class="container">
            <h1>Sign up</h1>
          <?PHP  if(isset($_GET['error'])){
              if($_GET['error']=="emptyfields"){
                  echo '<p class="red">Fill all fields</p>';
              }
              elseif($_GET['error']=="invalidusername"){
                echo '<p class="red">Please select username consist of characters and numbers only.</p>';
            }
            elseif($_GET['error']=="invalidemail"){
                echo '<p class="red">Please enter a valid email address.</p>';
            }
            elseif($_GET['error']=="usernamealreadytaken"){
                echo '<p class="red">Usernaem already exists.</p>';
            }
            
          }

          ?>
           <form action="include/signphp.php" method="POST">
             <!--    <div class="form-group">
                <input type="text" class="form-control" value="Name">
                </div> -->
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" name="username">
                </div>
                <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Contact" name="contact">
                </div> 
                <div class="form-group">
                <input type="text" class="form-control" placeholder="City" name="city">
                </div>
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Address" name="address">
                </div> 
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>                      
            </form>
        </div>
    </div>

    <footer>
            <p><strong>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</strong></p>
        </footer>
</body>
</html>