<?php

    $host='localhost';
    $user='root';
    $password='';
    $db='aamir';
    
    $con=mysqli_connect($host,$user,'',$db);
    if($con){
        echo("connected");
        
    }else{
        echo("Not Connected");
    }
        
    

?>
