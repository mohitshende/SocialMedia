<?php

include "dbconnect.php";


if($_SERVER['REQUEST_METHOD']=='POST'){

    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * FROM `user` WHERE `email`='$email'";

    $result=mysqli_query($con,$sql);

    $num=mysqli_num_rows($result);

    if($num>0){
        echo "<div class='alert alert-warning' role='alert'>
        Account already exists
      </div>";

    }
    else{

        $sql="INSERT INTO `user` (`email`, `password`) VALUES ('$email', '$password')";
        $result=mysqli_query($con,$sql);

        if($result){
            echo "<div class='alert alert-success' role='alert'>
            Your Account has been created
            </div>";
            echo "<script>window.location.href='Login.php'</script>";
        }
        else{
            echo "Please try again";
        }

        $s="CREATE TABLE `socialMedia`.`$email` ( `sr no` INT NOT NULL AUTO_INCREMENT ,  `message` TEXT NOT NULL ,  `time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,    PRIMARY KEY  (`sr no`)) ENGINE = InnoDB;";
   
        $exe=mysqli_query($con,$s);
    }

}
?>