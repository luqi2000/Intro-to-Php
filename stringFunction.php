<?php

    $username = "LuqmanCode";
    $phone = "123-456-7890";

    //$username = strtolower($username);// everything lowerCase
    $username = strtoupper($username); //uppercase
    //$username = trim($username); //remove any spaces before or after 
    //$username = str_pad($username, 20, "/"); //i want in total 20 carachter so Luqmancode///////


    $phone  = str_replace("-","", $phone);//replace one character with another

    echo $phone;
    echo $username;
    

?>