<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sanitizeValidate.php" method="post">
        username:<br>
        <input type="text" name="username"><br>
        age:<br>
        <input type="text" name="age"><br>
        <input type="submit" name="login" value="login"><br>

    </form>
</body>
</html>


<?php

//if login button is set
    if(isset($_POST["login"])){

        //use filter_input because otherwise somebody can put wrong info in your username details and then that code can be execute esemple virus etc...
        //we use 3 argoments first is input_post because we are using POST METHOD
        //FILTER_SANITIZE_SPECIAL_CHARS will remove any special character used and executing code
        //FILTER_SANITIZE_NUMBER_INT if i use this and in the age i write fgdj23bdg he print only 23
        
        $username = filter_input(INPUT_POST,"username", FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT );
        echo "Hello {$username}<br>";
        echo "You are {$age} years old";
    }

?>