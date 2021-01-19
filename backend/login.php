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
                          

                echo "<script>window.location.href='Home.php'</script>";
            }
            else{
                echo " <div class='alert alert-danger alert-dismissible fade show'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                <strong>Invalid Credentials</strong>
              </div>";
            }
        }

    }
    else{
        echo "You don't have any account. Please create new account";
    }
}


?>