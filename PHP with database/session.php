<?php 

    session_start();
    $_SESSION['name'] = "Sunny Dai";

    $_SESSION['password'] = "1235467";
    echo $_SESSION['name'];

    echo "<pre>";
    print_r($_SESSION);
 
?>