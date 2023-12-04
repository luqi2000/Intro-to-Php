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
        echo "{$grade} is not valid<br>";                
}
//---------------------------------------
//Exercise 2
 
    $date = date("l"); //l will give the current name of today date for example monday
    
    switch($date){
        case "Monday":
            echo " I hate Mondays";
            break;
        case "Tuesday":
            echo "It is taco Tuesday";
            break;
        case "Tuesday":
            echo "It is taco Tuesday";
            break;
        case "Wednesday":
            echo "Half work done!!";
            break;
        case "Thursday":
            echo "hmmmm, Almost week end  hahahahah";
            break;
        case "Friday":
            echo "It is so lovely Friday";
            break;                
        case "Saturday":
            echo "Refreshing";
            break;    
        case "Sunday":
            echo "Rest day";
            break;  

        default:
        echo "{$date} is not a day";

    }
?>