<?php

//arrays = variable that can hold more than one value at a time 

    $foods = array("apple","orange", "banana", "coconut");

    //echo $foods; // return error or "Array"

    echo $foods[0] . "<br>";//return the first element of the array
    echo $foods[1] . "<br><br><br><br>";


    //adding element at the end of the array in foods variable
    array_push(
        $foods,"pineapple", "kiwi","Mango"
    );

    //removing last element from the array so will remove Mango
    array_pop($foods);

    //remove the first element from the array
    array_shift($foods);
  
    //if I want to display all the element of the Array?
    foreach($foods as $food){
        echo $food . "<br>";
    }

    echo "<br><br><br>";
    echo $foods[0];
   
?>