<?php
// include "post.php";
// include "postdelet.php";

if(isset($_POST['delet'])){
    $sql="SELECT * FROM `$set`";

$result=mysqli_query($con,$sql);

$num=mysqli_num_rows($result);

    if($num>0){
        while($fetch=mysqli_fetch_assoc($result)){


        $sql= "DELETE FROM `$set` WHERE `$set`.`sr no` ='".$fetch['sr no']."'";
        $result=mysqli_query($con,$sql);
    }
}
}

$sql="SELECT * FROM `$set` ORDER BY `time` DESC";

$result=mysqli_query($con,$sql);

$num=mysqli_num_rows($result);

if($num>0){
    while($fetch=mysqli_fetch_assoc($result)){

        echo '      
    <div class="card my-4 shadow" >
    <div class="card-header d-flex justify-content-between">
            <h5 class="my-auto">'.$_SESSION["name"].'</h5>
            
            
            <div class="dropdown dropleft " style="float:right;">
            <a class="btn three-dots" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bi bi-three-dots-vertical"></i> 
              
            </a>
          
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="#">Edit</a>
              <a class="dropdown-item" href="#">For other options</a>
              <form method="post" enctype="multipart/form-data">
              <button class="dropdown-item" name="delet" type="submit">Delete</button>
              </form>            
            </div>
          </div>


            </div>
            <div class="card-body">
            <h5 class="card-title">'.$fetch['heading'].'</h5>
            <p class="card-text">
                '.$fetch["message"].'                          
            </p>
            <h6 class="card-subtitle mb-2 text-muted"> '.$fetch["time"].' </h6>  
        </div>
            <img class="card-img-top"  width="10" height="180" src="UserImages/'.$set.'/'.$fetch['filename'].'">
        
    </div>';


    }
}
else{
    echo "<h2>No Posts To Display</h2>";
}

?>