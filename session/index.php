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
    This is the login page
    <a href="home.php"> this goes to the home page</a>
    <br>

</body>
</html>

<?php
    $_SESSION["username"] = "LuqmanCode";
    $_SESSION["password"] = "Pizza123!";

    echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"] . "<br>";
?>