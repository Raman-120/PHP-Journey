<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>

    <h2>Registration Form</h2>

    <form action="crudAddData.php" method="POST">

        <!-- Name -->
        <label for="name">Name:</label>
        <input type="text"  name="name" placeholder="name">
        <br><br>

        <!-- Email -->
        <label for="email">Email:</label>
        <input type="email"  name="email" placeholder="email">
        <br><br>

        <!-- Password -->
        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="password">
        <br><br>

        <!-- Qualification -->
        <label for="qualification">Qualification:</label>
        <select id="qualification" name="qualification">
            <option value="">Select Qualification</option>
            <option value="SEE">SEE</option>
            <option value="+2">+2</option>
            <option value="bachelor">Bachelor's</option>
            <option value="master">Master's</option>
        </select>
        <br><br>

        <!-- Gender -->
        <label>Gender:</label>

        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>

        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>

        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>

        <br><br>

        <!-- Skills -->
        <label>Skills:</label>
        <br>

        <input type="checkbox" id="java" name="language[]" value="java">
        <label for="java">Java</label>

        <input type="checkbox" id="python" name="language[]" value="python">
        <label for="python">Python</label>

        <input type="checkbox" id="php" name="language[]" value="php">
        <label for="php">PHP</label>

        <input type="checkbox" id="javascript" name="language[]" value="javascript">
        <label for="javascript">JavaScript</label>

        <input type="checkbox" id="cpp" name="language[]" value="cpp">
        <label for="cpp">C++</label>

        <br><br>

        <!-- Address -->
        <label for="address">Address:</label>
        <br>

        <textarea id="address" name="address" rows="4" cols="30"></textarea>

        <br><br>

        <!-- Submit -->
        <input type="submit" value="Submit">

    </form>

</body>
</html>