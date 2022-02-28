
   <nav class="navbar navbar-expand-sm  bg-dark navbar-dark ">
       <a href="index.php" class="navbar-brand">Lifestyle</a>
       
       <?php
            if(isset($_SESSION['uid'])){
                echo ' <ul class="navbar-nav">
                <li class="nav-item ">
                    <a href="cart.php" class="nav-link"><i class="fas fa-shopping-cart"></i> Cart</a>
                </li>
                <li class="nav-item">
                    <a href="settings.php" class="nav-link"><i class="fas fa-user-cog"></i> Settings</a>
                </li>
                <li class="navbar-nav">
                    <a href="logout.php" class="nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </li>
            </ul>';
            } else{
                echo  '<ul class="navbar-nav  navbar-right">
            <li class="nav-item ">
            <a href="signup.php" class="nav-link"><span class="fas fa-user"></span> Sign up</a>
        </li>
        <li class="navbar-nav">
            <a href="login.php" class="nav-link"><span class="fas fa-sign-in-alt"></span> Login</a>
        </li>
    </ul>';
            }
           ?>
    </nav>

   