<?PHP
    session_start();
    if(!isset($_SESSION['uid'])){
        header("location:index.php");
        exit();
    }
    session_unset();
    session_destroy();
    header("location: index.php?logout=success");
    exit();