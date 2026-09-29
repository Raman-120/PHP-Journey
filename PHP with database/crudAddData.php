<?php

   include "connection.php";

   if(isset($_POST['submit'])){
       
        $id = $_POST['id'];
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


   }
   
    

    if(isset($_POST['update'])){
     
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $qualification = $_POST['qualification'];
        $gender = $_POST['gender'];
        $language = $_POST['language'];
        $address = $_POST['address'];

        $lang = implode(", ",$language);

        $sql = "UPDATE cruddata SET name = '$name', email = '$email', password = '$password', qualification = '$qualification', gender = '$gender',
                language = '$lang', address = '$address' WHERE  id = '$id' ";


        $check = mysqli_query($con,$sql);
        if($check){
        ?>
        <script type = "text/javascript">
            alert("data updated successfully..");
            window.location = "crudViewData.php";
        </script>
        <?php 
        }






    }
    
?>