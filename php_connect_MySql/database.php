<!--  
1) open xammp manager-osx and make sure mysql and apache are running
2) On google go to : http://localhost/phpmyadmin/ 
3) click to database, write name of database examble: businessdb and then click on create
4) close 

-->

<?php
    
    $db_server = "localhost"; //name of the server
    $db_user = "root";
    $db_pass = "";
    $db_name = "businessdb";
    $conn = "";
    try{
        
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

    }catch(mysqli_sql_exception){
        echo "Could not connected";
    }
    
    //check if connection is running 
    if($conn){
        echo "You are connected ";
    }
  
?>