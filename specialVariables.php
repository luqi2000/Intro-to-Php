<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="specialVariables.php" method="post"> 
        <label>username:</label><br>
        <input type= "text" name= "username"><br>
        <label>password:</label><br>
        <input type= "password" name= "password"><br>
        <input type= "submit" value= "Log in"><br>
    </form>
   
</body>
</html>

<?php
// i am sending from Html with form action the data to php of the same file specialVariables
 /* 
    $_GET, $_POST are a special variables used to collect data from a Html form data is sent to the file in the action attribute of <form>

    $_GET = Data which one I send thanks to the form example username and password is automaticcaly writed into the url 
    is like an array so at the end will collect username and password if i want to
    <form action ="some_file.php" method = "get">
    - not secure 
    - char limit 
    - Get requets can be cached 
    - better for a search page.
    example : http://localhost/website/specialVariables.php?username=bro&password=pizza123

    $_POST = Data is packaged inside the body of the HTTP request 
    - more secure 
    - no data limit 
    - get request are not cached 
    - better for submitting credentials 

 */

    echo "{$_POST["username"]} <br>"; // this will print username which one i will type in google
    echo "{$_POST["password"]} <br>"; 
?>