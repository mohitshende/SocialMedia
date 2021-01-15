<?php

include "dbconnect.php";

if(isset($_POST['post'])){

    $message=$_POST['message'];
    $sql="INSERT INTO `posts` ( `message`, `time`) VALUES ( '$message', current_timestamp());";

    $result = mysqli_query($con,$sql);
   
}

$sql="SELECT * FROM `posts`";

$result=mysqli_query($con,$sql);

$num=mysqli_num_rows($result);

if($num>0){
    while($fetch=mysqli_fetch_assoc($result)){
        echo $fetch['message'];
        echo "<br>";
        echo "Time :- ".$fetch['time'];
        echo "<br>";
        echo "<br>";

    }
}



?>