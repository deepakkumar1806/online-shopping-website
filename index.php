<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist\js\bootstrap.min.js">
    <link rel="stylesheet" href="indexcss.php">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Lifestyle store</title>
</head>
<body>
   <?php require "include/navbar.php";?>

  <div class="container-fluid">
      
      <div class="card">
          <div class="card-body">
          <h1 class="card-title">We sell Lifestyle</h1>
          <p class="card-text">Flat 40% off on premium brands</p>
          <a href="products.php" class="btn btn-danger card-link">Shop now</a>
            </div>
        </div>
      </div>
      
      <footer>
            <p><strong>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</strong></p>
        </footer>
   
</body>
</html>