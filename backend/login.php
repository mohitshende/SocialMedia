<?php

include "dbconnect.php";

if($_SERVER['REQUEST_METHOD']=='POST'){

    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * FROM `user` WHERE `email`='$email'";

    $result=mysqli_query($con,$sql);

    $num=mysqli_num_rows($result);

    if($num==1){
        while($fetch=mysqli_fetch_Assoc($result)){

            if($fetch['email']==$email && $fetch['password']==$password){
                session_start();
                          $_SESSION['email']=$email;

                        //   $set=$_SESSION['email'];
                          

                echo "<script>window.location.href='user.php'</script>";
            }
            else{
                echo "Invalid crentials";
            }
        }

    }
}


?>