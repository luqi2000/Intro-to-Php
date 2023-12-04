<?php
//switch = replacement to using many else if statements more efficient, less code to write

$grade = "F";

switch($grade){
    case "A": 
        echo "You did great!";
        break; //You need to go out if it is ok 

    case "B": 
        echo "You did good!";
        break;  

    case "C": 
        echo "You did Ok!";
        break; 

    case "D": 
        echo "You did poorly!";
        break;

    case "E": 
        echo "You failed!";
        break;      
    default:
        echo "{$grade} is not valid";                
}
?>