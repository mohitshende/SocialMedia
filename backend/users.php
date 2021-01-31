<?php
include "dbconnect.php";

// session_start();

$sql="SELECT * FROM `user`";

$result=mysqli_query($con,$sql);
$totalusers=mysqli_num_rows($result);
if($totalusers>0){
    while($fetch=mysqli_fetch_assoc($result)){

        

        
        echo ' <div class="prsec">
        <div class="py-2 d-flex flex-row align-items-center justify-content-between">
            <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar"
                style="width:70px;border-radius: 50%;">
            <h4>'.$fetch["name"].'</h4>
        </div>
        <div class="d-flex flex-row justify-content-center">
            <a href="" class="btn btn-secondary mr-2"><i class="bi bi-person-plus-fill"></i></a>
            <a href="" class="btn btn-secondary"><i class="bi bi-chat-left-fill"></i></a>
        </div>
    </div>';
    }
}

?>