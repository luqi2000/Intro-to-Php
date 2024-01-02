<?php
    //cookie = information about a user stored in a user's web-browser targeted  
    //(key,value, time, Path )
    //86400 = 1 days
    //On google go to inspect then click on 


    setcookie("fav_food", "pizza",time() + (86400*2), "/");
    setcookie("fav_drink", "cofee",time() + (86400*3), "/");

    setcookie("fav_dessert", "caramello",time() - 0 , "/"); // with - 0 cookies is not showing 

    foreach($_COOKIE as $key => $value){
        echo "{$key} = {$value}<br>";

    }

    if(isset($_COOKIE["fav_food"])){
        echo "Buy some  {$_COOKIE["fav_food"]} !!1";
    }else{
        echo "I don't know your favorite food";
    }

?>
