<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkboxes.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">Pizza<br>
        <input type="checkbox" name="hamburgher" value="Hamburgher">Hamburgher<br>
        <input type="checkbox" name="hotdog" value="Hotdog">Hotdog<br>
        <input type="checkbox" name="taco" value="Taco">Taco<br>

        <input type="submit" name="submit">
    </form>
</body>
</html>


<?php
    if(isset($_POST["submit"])){
        //check if checkbox is set

        if(isset($_POST["pizza"])){
            echo "You like pizza! <br>";
        }
        if(isset($_POST["hamburgher"])){
            echo "You like hamburgher! <br>";
        }
        if(isset($_POST["hotdog"])){
            echo "You like hotdog! <br>";
        }
        if(isset($_POST["taco"])){
            echo "You like taco! <br>";
        }

        //if checkbox is empty

        if(empty($_POST["pizza"])){
            echo "You don't like pizza! <br>";
        }
        if(empty($_POST["hamburgher"])){
            echo "You don't like hamburgher! <br>";
        }
        if(empty($_POST["hotdog"])){
            echo "You don't like hotdog! <br>";
        }
        if(empty($_POST["taco"])){
            echo "You don't like taco! <br>";
        }
    }
?>