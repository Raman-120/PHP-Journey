<?php

   include "connection.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $qualification = $_POST['qualification'];
    $gender = $_POST['gender'];
    $language = $_POST['language'];
    $address = $_POST['address'];

    $lang = implode(", ",$language);

    $sql = "INSERT INTO cruddata (name, email, password, qualification, gender, language, address)
    	VALUES ('$name','$email','$password','$qualification','$gender','$lang','$address')";


    $check = mysqli_query($con,$sql);
    if($check){
        ?>
        <script type = "text/javascript">
            alert("data inserted successfully..");
            window.location = "crudform.php";
        </script>
        <?php 
    }

    

?>