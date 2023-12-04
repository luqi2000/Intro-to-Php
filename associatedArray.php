<?php
//associative array = an array made of key => value pairs

    $capitals = array ( "Usa" => "Washington",
                        "Italy" => "Rome",
                        "Pakistan"=> "Islamabad"
                    );

    echo $capitals["Italy"] . "<br>";// will print Rome

    //print all with key and value
    foreach($capitals as $key => $value){
        echo "{$key} = {$value}<br>";
    }
?>