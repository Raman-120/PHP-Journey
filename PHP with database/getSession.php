<?php 

    session_start();
    echo $_SESSION['name'];
    session_unset();
    echo $_SESSION["password"];

    echo "<pre>";
    print_r($_SESSION);

?>