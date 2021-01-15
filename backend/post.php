<?php

include "dbconnect.php";
session_start();
$set=$_SESSION['email'];
// echo $set;

if(isset($_POST['post'])){
    // session_start();
    
    $message=$_POST['message'];
    $sql="INSERT INTO `$set` ( `message`, `time`) VALUES ( '$message', current_timestamp());";

    $result = mysqli_query($con,$sql);
   
}


?>