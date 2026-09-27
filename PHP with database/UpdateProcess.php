<?php

    $con = mysqli_connect("localhost","root","","PHP database");
    $username = $_POST['user'];
    $password = $_POST["pass"];
    $id = $_POST["id"];
    $sql = "UPDATE register set username = '$username', password = '$password' WHERE id = '$id' ";
    $check = mysqli_query($con,$sql);
    if($check){
        echo "data has been updated successfully";
    } 
    else{
        echo "Unable to update data";
    }



?>