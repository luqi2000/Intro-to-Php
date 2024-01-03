<?php

    include("database.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"] )?>" method="post">
        <h2>Welcome to FakeBook!</h2>
        username:<br>
        <input type="text" name="username" > <br>
        password:<br>
        <input type="text" name="password" > <br>
        <input type="submit" name="submit" value="register">

    </form>
</body>
</html>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //filter any virus script
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        //checl if one of username or password is empty
        if(empty($username)){
            echo "Please enter a username";
        }elseif(empty($password)){
            echo "Please enter a password";
        }else{
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";

            try{
                mysqli_query($conn, $sql);
                echo "You are now registered!";
            }catch(mysqli_sql_exception){
                echo "That username was already registered";
            }
            
        }
    }

    mysqli_close($conn);
?>