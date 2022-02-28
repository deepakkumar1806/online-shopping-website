<?PHP session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist\js\bootstrap.min.js">
    <link rel="stylesheet" href="products.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Product</title>
</head>
<body>
    <?php require "include/navbar.php";?>
    <?php require "include/check_if_added.php";?>
    <div class="container">
    <div class="jumbotron">
        <h1>Welcome to our Lifestyle Store!</h1>
        <p>We have the best cameras,watches and shirts for you.No need hunt around,we have all in one place.</p>
    </div>
         </div>

    <div class="market">
        <div class="container">
        <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="Bootstrap_Assignment\5.jpg">
            <div class="card-body">
                <h3 class="card-title">Cannon EOS</h3>
                <p class="card-text">Price:Rs 36000.00</p>
                <?PHP 
                    if(isset($_SESSION['uid'])){
                        if(check_if_addedto_cart(1)){
                            echo '<a href="cart.php" class="btn btn-primary btn-block disabled">Add to cart</a>';
                        } else{
                            echo '<a href="cart_add.php?id=1" class="btn btn-primary btn-block">Add to cart</a>';
                        }
                    } else{
                     echo '<a href="login.php" class="btn btn-primary btn-block">Add to cart</a>';  
                    }
                ?>
            </div>
        </div>
        <div class="card">
                <img class="card-img-top" src="Bootstrap_Assignment\2.jpg">
                <div class="card-body">
                    <h3 class="card-title">Sony DSLR</h3>
                    <p class="card-text">Price:Rs 50000.00</p>
                    <?PHP 
                    if(isset($_SESSION['uid'])){
                        if(check_if_addedto_cart(2)){
                            echo '<a href="cart.php" class="btn btn-primary btn-block disabled">Add to cart</a>';
                        } else{
                            echo '<a href="cart_add.php?id=2" class="btn btn-primary btn-block">Add to cart</a>';
                        }
                    } else{
                     echo '<a href="login.php" class="btn btn-primary btn-block">Add to cart</a>';  
                    }
                ?>
                </div>
            </div>
            <div class="card">
                    <img class="card-img-top" src="Bootstrap_Assignment\3.jpg">
                    <div class="card-body">
                        <h3 class="card-title">Sony DSLR</h3>
                        <p class="card-text">Price:Rs 50000.00</p>
                        <?PHP 
                    if(isset($_SESSION['uid'])){
                        if(check_if_addedto_cart(3)){
                            echo '<a href="cart.php" class="btn btn-primary btn-block disabled">Add to cart</a>';
                        } else{
                            echo '<a href="cart_add.php?id=3" class="btn btn-primary btn-block">Add to cart</a>';
                        }
                    } else{
                     echo '<a href="login.php" class="btn btn-primary btn-block">Add to cart</a>';  
                    }
                ?>
                    </div>
                </div> 
                <div class="card">
                        <img class="card-img-top" src="Bootstrap_Assignment\4.jpg">
                        <div class="card-body">
                            <h3 class="card-title">Olympus DSLR</h3>
                            <p class="card-text">Price:Rs 80000.00</p>
                            <?PHP 
                    if(isset($_SESSION['uid'])){
                        if(check_if_addedto_cart(4)){
                            echo '<a href="cart.php" class="btn btn-primary btn-block disabled">Add to cart</a>';
                        } else{
                            echo '<a href="cart_add.php?id=4" class="btn btn-primary btn-block">Add to cart</a>';
                        }
                    } else{
                     echo '<a href="login.php" class="btn btn-primary btn-block">Add to cart</a>';  
                    }
                ?>
                        </div>
                    </div>
            </div> <br> 
        <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="Bootstrap_Assignment\9.jpg">
                    <div class="card-body">
                        <h3 class="card-title">Titan Model #301</h3>
                        <p class="card-text">Price:Rs 13000.00</p>
                        <?PHP 
                    if(isset($_SESSION['uid'])){
                        if(check_if_addedto_cart(5)){
                            echo '<a href="cart.php" class="btn btn-primary btn-block disabled">Add to cart</a>';
                        } else{
                            echo '<a href="cart_add.php?id=5" class="btn btn-primary btn-block">Add to cart</a>';
                        }
                    } else{
                     echo '<a href="login.php" class="btn btn-primary btn-block">Add to cart</a>';  
                    }
                ?>
                    </div>
                </div>
                <div class="card">
                        <img class="card-img-top" src="Bootstrap_Assignment\10.jpg">
                        <div class="card-body">
                            <h3 class="card-title">Titan Model #201</h3>
                            <p class="card-text">Price:Rs 3000.00</p>
                            <?PHP 
                    if(isset($_SESSION['uid'])){
                        if(check_if_addedto_cart(6)){
                            echo '<a href="cart.php" class="btn btn-primary btn-block disabled">Add to cart</a>';
                        } else{
                            echo '<a href="cart_add.php?id=6" class="btn btn-primary btn-block">Add to cart</a>';
                        }
                    } else{
                     echo '<a href="login.php" class="btn btn-primary btn-block">Add to cart</a>';  
                    }
                ?>
                        </div>
                    </div>
                    <div class="card">
                            <img class="card-img-top" src="Bootstrap_Assignment\11.jpg">
                            <div class="card-body">
                                <h3 class="card-title">HMT Milan</h3>
                                <p class="card-text">Price:Rs 8000.00</p>
                                <?PHP 
                    if(isset($_SESSION['uid'])){
                        if(check_if_addedto_cart(7)){
                            echo '<a href="cart.php" class="btn btn-primary btn-block disabled">Add to cart</a>';
                        } else{
                            echo '<a href="cart_add.php?id=7" class="btn btn-primary btn-block">Add to cart</a>';
                        }
                    } else{
                     echo '<a href="login.php" class="btn btn-primary btn-block">Add to cart</a>';  
                    }
                ?>
                            </div>
                        </div> 
                        <div class="card">
                                <img class="card-img-top" src="Bootstrap_Assignment\12.jpg">
                                <div class="card-body">
                                    <h3 class="card-title">Faber Luba #111</h3>
                                    <p class="card-text">Price:Rs 18000.00</p>
                                    <?PHP 
                    if(isset($_SESSION['uid'])){
                        if(check_if_addedto_cart(8)){
                            echo '<a href="cart.php" class="btn btn-primary btn-block disabled">Add to cart</a>';
                        } else{
                            echo '<a href="cart_add.php?id=8" class="btn btn-primary btn-block">Add to cart</a>';
                        }
                    } else{
                     echo '<a href="login.php" class="btn btn-primary btn-block">Add to cart</a>';  
                    }
                ?>
                                </div>
                            </div>
            </div> <br>  
        <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top" src="Bootstrap_Assignment\8.jpg">
                            <div class="card-body">
                                <h3 class="card-title">H&W</h3>
                                <p class="card-text">Price:Rs 800.00</p>
                                <?PHP 
                    if(isset($_SESSION['uid'])){
                        if(check_if_addedto_cart(9)){
                            echo '<a href="cart.php" class="btn btn-primary btn-block disabled">Add to cart</a>';
                        } else{
                            echo '<a href="cart_add.php?id=9" class="btn btn-primary btn-block">Add to cart</a>';
                        }
                    } else{
                     echo '<a href="login.php" class="btn btn-primary btn-block">Add to cart</a>';  
                    }
                ?>
                            </div>
                        </div>
                        <div class="card">
                                <img class="card-img-top" src="Bootstrap_Assignment\6.jpg">
                                <div class="card-body">
                                    <h3 class="card-title">Luis Phil</h3>
                                    <p class="card-text">Price:Rs 1000.00</p>
                                    <?PHP 
                    if(isset($_SESSION['uid'])){
                        if(check_if_addedto_cart(10)){
                            echo '<a href="cart.php" class="btn btn-primary btn-block disabled">Add to cart</a>';
                        } else{
                            echo '<a href="cart_add.php?id=10" class="btn btn-primary btn-block">Add to cart</a>';
                        }
                    } else{
                     echo '<a href="login.php" class="btn btn-primary btn-block">Add to cart</a>';  
                    }
                ?>
                                </div>
                            </div>
                            <div class="card">
                                    <img class="card-img-top" src="Bootstrap_Assignment\13.jpg">
                                    <div class="card-body">
                                        <h3 class="card-title">John zok</h3>
                                        <p class="card-text">Price:Rs 1500.00</p>
                                        <?PHP 
                    if(isset($_SESSION['uid'])){
                        if(check_if_addedto_cart(11)){
                            echo '<a href="cart.php" class="btn btn-primary btn-block disabled">Add to cart</a>';
                        } else{
                            echo '<a href="cart_add.php?id=11" class="btn btn-primary btn-block">Add to cart</a>';
                        }
                    } else{
                     echo '<a href="login.php" class="btn btn-primary btn-block">Add to cart</a>';  
                    }
                ?>
                                    </div>
                                </div> 
                                <div class="card">
                                        <img class="card-img-top" src="Bootstrap_Assignment\14.jpg">
                                        <div class="card-body">
                                            <h3 class="card-title">Jhalsani</h3>
                                            <p class="card-text">Price:Rs 1300.00</p>
                                            <?PHP 
                    if(isset($_SESSION['uid'])){
                        if(check_if_addedto_cart(12)){
                            echo '<a href="cart.php" class="btn btn-primary btn-block disabled">Add to cart</a>';
                        } else{
                            echo '<a href="cart_add.php?id=12" class="btn btn-primary btn-block">Add to cart</a>';
                        }
                    } else{
                     echo '<a href="login.php" class="btn btn-primary btn-block">Add to cart</a>';  
                    }
                ?>
                                        </div>
                                    </div>
            </div>  <br>                             
             </div>
    </div>

    <footer>
        <p><strong>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</strong></p>
    </footer>
</body>
</html>