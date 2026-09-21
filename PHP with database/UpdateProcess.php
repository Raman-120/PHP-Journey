<?php

    $con = mysqli_connect("localhost","root","","PHP database");
    $username = $_POST['user'];
    $password = $_POST["pass"];
    $id = $_REQUEST["id"];
    $sql = "UPDATE register set username = '$username', password = '$password' WHERE id = '$id' ";
    mysqli_query($con,$sql); 



?>