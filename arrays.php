<?php

//arrays = variable that can hold more than one value at a time 

    $foods = array("apple","orange", "banana", "coconut");

    //echo $foods; // return error or "Array"

    echo $foods[0] . "<br>";//return the first element of the array
    echo $foods[1] . "<br><br><br><br>";
  
    //if I want to display all the element of the Array?
    foreach($foods as $food){
        echo $food . "<br>";
    }
   
?>