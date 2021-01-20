<?php
// include "post.php";

$sql="SELECT * FROM `$set`";

$result=mysqli_query($con,$sql);

$num=mysqli_num_rows($result);

if($num>0){
    while($fetch=mysqli_fetch_assoc($result)){

        echo '      
    <div class="card">
            <h5 class="card-header">Fetch name here</h5>
            <img class="card-img-top"  width="100%" height="180" src="">
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">
                '.$fetch["message"].'                          
            </p>
            <h6 class="card-subtitle mb-2 text-muted"> '.$fetch["time"].' </h6>  
        </div>
    </div>';


    }
}
else{
    echo "<h2>No Posts To Display</h2>";
}

?>