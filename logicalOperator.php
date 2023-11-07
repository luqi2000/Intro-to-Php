<?php
    // Logical operators = combine conditional statements
    // if(condition && condition2)

    //  && = true if both condition are true
    //  || = true if at least one condition is true 
    //  ! = true if false. false if true 

    $temp = 15;
    $cloudy = false;


    if($temp >= 0 && $temp <=30){
        echo "the weather is good<br>";
    }else {
        echo "the weather is bad<br>";
    }
//-------------------------------------------
    if($temp < 0 || $temp >=30){
        echo "the weather is bad<br>";
    }else {
        echo "the weather is good<br>";
    }
//-------------------------------------------
    if(!$cloudy == true){
        echo"It's sunny<br>";
    }else{
        echo "It's cloudy<br>";
    }

//--------------------------------------------
//My country has election


    $age = 23;
    $citizen = true;

    if($age >= 18 && $citizen){
        echo "You can vote";
    }else{
        echo "You cannot vote";
    }

?>