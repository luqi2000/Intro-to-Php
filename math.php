<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="math.php" method="post">
        <label>x:</label>
        <input type="text" name="x">
        <label>y:</label>
        <input type="text" name="y">
        <label>x:</label>
        <input type="text" name="x">

        <input type="submit" value="total">

    </form>
    
</body>
</html>

<?php
   $x = $_POST["x"];
   $y = $_POST["y"];
   $total = null;

   //$total = abs($x); //absolute value ovvero positive value so if i put -3 it will became 3
   //$total = round($x); // example 3.90 will became 4
   //$total = floor($x); // round for difect example 3.9 will became 3
   //$total = ceil($x); //round for eccess for example 1.3 will became 2
   //$total = sqrt($x);// radice
   $total = pow($x, $y); // power so example x=2, y=3, total= 8

   echo $total;

?>