<?php
    $username = $_GET["user"];
    $password = $_GET["pass"];
    $id = $_REQUEST["id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action  = "UpdateProcess.php" method="POST">
        <input type="text" name = "pass" value = "<?php echo $id;?>"><br>

        <label>Username</label>
        <input type="text" name = "user" value = "<?php echo $username;?>" ><br>
        <label>password</label>
        <input type="password" name = "pass" value = " <?php echo $password;?>" ><br>
        <input type = "submit" name="" value = "Update Data">
    </form>
</body>
</html>
