<?php
    include("database.php");


    $username = "Luqman";
    $password = "Apple123";

    //adding into Mysql admin
    $sql = "INSERT INTO users (user, password) VALUES ('$username' , '$password') ";

    try{
        mysqli_query($conn, $sql);
        echo "user is now registered succesfully";
    }catch(mysqli_sql_exception){
        echo "coul not register user";
    }

    //close a connection
    mysqli_close($conn);

?>