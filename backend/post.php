<?php
error_reporting(0); 
?> 
<?php
$msg = ""; 
include "dbconnect.php";
session_start();
$set=$_SESSION['email'];
// echo $set;

if(isset($_POST['post'])){
    // session_start();
    $filename = $_FILES["uploadfile"]["name"]; 
    $tempname = $_FILES["uploadfile"]["tmp_name"]; 
    mkdir("UserImages/$set");
    $folder = "UserImages/".$set."/"; 
    
    $newfileName=date('dmyHis').str_replace(" ","",basename($filename));
    

    $message=$_POST['message'];
    $heading=$_POST['heading'];
    
    
    
    // $sql="INSERT INTO `$set` (`message`,`filename`, `time`) VALUES ('$message','$newfileName', current_timestamp());";
    $sql="INSERT INTO `$set` (`heading`, `message`, `filename`, `time`) VALUES ('$heading', '$message', '$newfileName', current_timestamp());";
    
    $result = mysqli_query($con,$sql);
    
    
    if (move_uploaded_file($tempname, $folder.$newfileName))  { 
        $msg = "Image uploaded successfully"; 
    }else{ 
        $msg = "Failed to upload image"; 
  } 
   
}


?>