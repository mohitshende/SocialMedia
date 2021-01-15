<?php
// include "post.php";

$sql="SELECT * FROM `$set`";

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
else{
    echo "<h2>No Posts To Display</h2>";
}

?>