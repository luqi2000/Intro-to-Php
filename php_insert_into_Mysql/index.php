<?php
    include("database.php");


    $username = "Dario";
    $password = "Dario123";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    //adding into Mysql admin
    $sql = "INSERT INTO users (user, password) VALUES ('$username' , '$hash') ";

    try{
        mysqli_query($conn, $sql);
        echo "user is now registered succesfully";
    }catch(mysqli_sql_exception){
        echo "coul not register user";
    }

    //close a connection
    mysqli_close($conn);

?>