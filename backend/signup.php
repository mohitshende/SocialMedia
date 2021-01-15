<?php

include "dbconnect.php";


if($_SERVER['REQUEST_METHOD']=='POST'){

    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * FROM `user` WHERE `email`='$email'";

    $result=mysqli_query($con,$sql);

    $num=mysqli_num_rows($result);

    if($num>0){
        echo "User email Already exists";

    }
    else{

        $sql="INSERT INTO `user` (`email`, `password`) VALUES ('$email', '$password')";
        $result=mysqli_query($con,$sql);

        if($result){
            echo "Your Account has been created";
        }
        else{
            echo "Please try again";
        }

        $s="CREATE TABLE `expense`.`$email` ( `sr no` INT NOT NULL AUTO_INCREMENT ,  `message` TEXT NOT NULL ,  `time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,    PRIMARY KEY  (`sr no`)) ENGINE = InnoDB;";
   
        $exe=mysqli_query($con,$s);
    }

}
?>