<?php
    //if statement = if some condition is true, do something 
    //if condition is false, don't do it
    // == is used for comparetion
    // = is used for assignment something

    $age = 101;

    if($age >=100){ // the reason why i moved this statement first is because if this is true then the rest of code will not execute
        echo "You are too old to enter this site";
    }
    else if ($age>=18){
        echo "You may enter this site";
    }
    else if($age <= 0){
        echo "That wasn't a valid age";

    }
    else{
        echo "You must 18+ to be enter";
    }


    //------------------------------------------------------------------------

    $adult = false;

    if($adult ){ // automatically if you put $adult it mean ($adult == true )
        echo "<br>You may enter this site";
    }
    else{
        echo "<br>You must be an adult to enter";
    }


    //------------------------------------------------------------------------
?>