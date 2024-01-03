<?php

    include("database.php");

    //write sql query
    //$sql = "SELECT * FROM users ";
    $sql = "SELECT * FROM users WHERE user = 'Spongebob' ";

    //this will return an object like an associative array
    $result = mysqli_query($conn, $sql);

    //find how many rows we have in the result. so if we have at lest 1 result then 
    if(mysqli_num_rows($result) > 0 ){

        //this function will return the next avaible row withing the object and while loop is needed if i want to retrive more than 1 row 
        while($row = mysqli_fetch_assoc($result)){

            echo $row["id"]. "<br>";
            echo $row["user"]. "<br>";
            echo $row["reg_date"]. "<br>";

        };


    }else{
        echo "No user found";
    }

    mysqli_close($conn);

?>
