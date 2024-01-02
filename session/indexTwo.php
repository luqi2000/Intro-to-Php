<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="indexTwo.php" method="post">
        username: <br>
        <input type="text" name="username"><br>
        password: <br>
        <input type="password" name="password"><br>

        <input type="submit" name="login" value="login"><br>
    </form>
    <br>

</body>
</html>

<?php
//if login button is set
   if(isset($_POST["login"])){

    //if password and username is not empty then assign Session variable
    if(!empty($_POST["username"]) && !empty($_POST["password"])){
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        header("Location: homeTwo.php"); //this will rederect you on the HomeTwo page


        echo $_SESSION["username"] . "<br>";
        echo $_SESSION["password"];
    }else{
        echo "Missing information <br>";
    }
   }
?>