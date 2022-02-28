<?PHP session_start();
if(!isset($_SESSION['uid'])){
    header("location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist\js\bootstrap.min.js">
    <link rel="stylesheet" href="settingscss.php">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Settings</title>
</head>
<body>
<?php require "include/navbar.php";?>
        
        <div class="container">
            <div class="content">
                <h1>Change Password</h1>
                <?php
                    if(isset($_GET['error'])){
                        if($_GET['error']=="emptyfields"){
                            echo "<p class=\"red\">Fill all fields</p>";
                        }
                        elseif($_GET['error']=="passwordmismatch"){
                            echo "<p class=\"red\">please enter same password in new and re password fields</p>";
                        }
                        elseif($_GET['error']=="wrongpassword"){
                            echo "<p class=\"red\">please enter correct password in old password fields</p>";
                        }
                        
                    }elseif(isset($_GET['success'])){

                        echo "<p class=\"green\">password changed successfully</p>";
                    }
                ?>
                <form action="settings_script.php" method="post">
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Old Password" name="oldpsw">
                    </div>
                    <div class="form-group">
                            <input type="password" class="form-control" placeholder="New Password" name="newpsw">
                        </div>
                        <div class="form-group">
                                <input type="password" class="form-control" placeholder="Re-type New  Password" name="renewpsw">
                            </div>
                <button type="submit" class="btn btn-primary">Change</button>
                </form>
            </div>
        </div>

        <footer>
                <p><strong>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</strong></p>
            </footer>
</body>
</html>