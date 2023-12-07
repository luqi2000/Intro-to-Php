<?php
//associative array = an array made of key => value pairs

    $capitals = array ( "Usa" => "Washington",
                        "Italy" => "Rome",
                        "Pakistan"=> "Islamabad"
                    );

    echo $capitals["Italy"] . "<br>";// will print Rome

    //change value of Usa from Washington to New york
    $capitals["Usa"] = "New York"; //changing value from key 
    $capitals["Uk"] = "London"; //adding key-value

    $keys = array_keys($capitals); //this will return a new array
 
    //print all with key and value
    foreach($capitals as $key => $value){
        echo "{$key} = {$value}<br>";
    }

    //display all keys
    foreach($keys as $key){
        echo "{$key}<br>";
    }
?>