<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="specialVariables.php" method="get"> 
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
    <form action ="some_file.php" method = "get">

    $_GET = Data is appended to the url - not secure - char limit - Get requets can be cached - better for a search page.
    $_POST = Data is packaged inside the body of the HTTP request - more secure - no data limit - get request are not cached - better for submitting credentials 

 */
?>