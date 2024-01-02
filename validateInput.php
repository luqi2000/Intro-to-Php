<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validateInput.php" method="post">
        username:<br>
        <input type="text" name="username"><br>
        age:<br>
        <input type="text" name="age"><br>
        <input type="submit" name="login" value="login"><br>

    </form>
</body>
</html>


<?php

//Validation: to undestand if age is not a valid age so only numbers accepted

    if(isset($_POST["login"])){
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

        if(empty($age)){
            echo "that number wasn't valid";
        }else{
            echo "You are $age years old";
        }
    }
?>