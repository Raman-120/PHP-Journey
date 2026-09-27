<?php
$con = mysqli_connect("localhost", "root", "","PHP database");
$id =$_REQUEST["id"];
$sql = "DELETE FROM register WHERE id = '$id'";
$check = mysqli_query($con,$sql);
if($check){
    echo "data deleted successfully";
    header("location:view-data.php");
}
else{
    echo "Unable to delete the data";
}
?>