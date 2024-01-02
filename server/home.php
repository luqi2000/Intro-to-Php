<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- $_SERVER["PHP_SELF"] contains the localpath from $_SERVER so it will take automatically, 
        htmlspecialchars will avoid any cross site script= -->

    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">username: <br>
        <input type="text" name="username" >
        <input type="submit" >
    </form>
        
</body>
</html>


<?php

//SERVER = super global variable that contains path , and script locations.
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "Hello<br>";
    }



    foreach($_SERVER as $key => $value){
        echo "{$key} = {$value} <br>";
    }
?>

