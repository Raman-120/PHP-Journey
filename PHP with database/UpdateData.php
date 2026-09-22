<table border="1px solid black">
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
        <th>Update</th>
    </tr>


<?php
    $con = mysqli_connect("localhost", "root","","PHP database");
    $sql = "SELECT * FROM register";
    $check = mysqli_query($con,$sql); // checks query
    $rowcount = mysqli_num_rows($check); // checks number of rows in the table
    
    if($rowcount > 0){
        // print_r(mysqli_fetch_array($check));
        // print_r(mysqli_fetch_assoc($check));

        while($data = mysqli_fetch_assoc($check)){
            ?>
            <tr>
                <td><?php echo $data["ID"] ?>;</td>
                <td><?php echo $data["username"]; ?></td>
                <td><?php echo $data["password"]; ?></td>
                <td><a href = "UpdateForm.php?id=<?php echo $data["ID"];?>&user=<?php echo $data["username"]; ?>&pass=<?php 
                echo $data["password"]; ?>">Update</a></td>
            </tr>
   
    <?php }
    }
    else{
        echo"No date found";
    }

    
?>
</table>