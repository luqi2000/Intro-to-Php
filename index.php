<?php
    echo "Hi, I love pizza! <br>"; //br for going down
    echo "It's really good!<br>"; 

    /* multi
    line
    comment*/

    //variable  =  a reusable container that holds data, string, integer, float, boolean

    //String of text
    $name = "Luqman Mohammad"; 
    $food = "pizza";
    $email = "fake1234@gmail.com";

    //Integer
    $age = 23; 
    $users = 2;
    $quantity = 3;

    //float 
    $gpa = 2.5; 
    $price = 4.99;

    //boolean
    $employed = true;
    $online = false;
    $for_sale = true;

    $total = null; //no value

    echo "Hello {$name} <br>"; 
    echo "You like {$food}<br>";
    echo "Your email is {$email}<br>";
    echo "You are {$age} years old<br>";
    echo "I would buy {$quantity} items<br>";
    echo "Your pizza cost \${$price}<br>";// \$ this is required if you want to put sign before the price
    echo "Online status {$online}<br>"; // dosn't show $online because it is false if $online was true then it will show 1 as a number 
    echo "you have ordered {$quantity} x {$food}s<br>";

    $total = $quantity * $price;
    echo "your total is {$total}£";





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <button>Order pizza</button>
    
</body>
</html>