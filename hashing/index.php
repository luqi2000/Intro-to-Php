<?php
    //hashing = trasforming sensitive data (password) into letters, numbers.... via mathematical process

    $password = "pizza123";

    //Password_default = use the bcrypt alghorithm

    $hash = password_hash($password, PASSWORD_DEFAULT);
    echo $hash;
?>
