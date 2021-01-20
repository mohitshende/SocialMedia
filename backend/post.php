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
    $folder = "UserImages/".$filename; 
    $message=$_POST['message'];
    
    
    $sql="INSERT INTO `$set` (`message`,`filename`, `time`) VALUES ('$message','$filename', current_timestamp());";
    $result = mysqli_query($con,$sql);
    
    if (move_uploaded_file($tempname, $folder))  { 
        $msg = "Image uploaded successfully"; 
    }else{ 
        $msg = "Failed to upload image"; 
  } 
   
  
}


?>