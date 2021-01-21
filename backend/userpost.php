<?php
// include "post.php";
// include "postdelet.php";

$sql="SELECT * FROM `$set`";

$result=mysqli_query($con,$sql);

$num=mysqli_num_rows($result);

if($num>0){
    while($fetch=mysqli_fetch_assoc($result)){

        echo '      
    <div class="card my-4 shadow ">
    <div class="card-header d-flex justify-content-between">
            <h5 class="my-auto">'.$_SESSION["name"].'</h5>
            
            
            <div class="dropdown dropleft " style="float:right;">
            <a class="btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bi bi-three-dots-vertical"></i> 
              
            </a>
          
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="#">Edit</a>
              <a class="dropdown-item" href="#">For other options</a>
              
              <a class="dropdown-item" href="../backend/postdelete.php" >Delete</a>
           
            
            </div>
          </div>


            </div>
            <img class="card-img-top"  width="10" height="180" src="UserImages/'.$fetch['filename'].'">
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