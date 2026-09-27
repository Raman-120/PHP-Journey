<?php
    
    $con = mysqli_connect("localhost", "root","","PHP database");
    $sql = "SELECT * FROM register";
    $check = mysqli_query($con,$sql); // checks query
    $rowcount = mysqli_num_rows($check); // checks number of rows in the table
    
    if($rowcount > 0){
        // print_r(mysqli_fetch_array($check));
        // print_r(mysqli_fetch_assoc($check));
        while($data = mysqli_fetch_assoc($check)){
            echo $data["ID"] . "<br>";
            echo $data["username"]."<br>";
            echo $data["password"]."<br>";
        }

    }
    else{
        echo "no data found";
    }

    
?>

