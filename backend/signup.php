<?php

include "dbconnect.php";


if($_SERVER['REQUEST_METHOD']=='POST'){

    $name=$_POST['fname'];
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

        $sql="INSERT INTO `user` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password');";
        $result=mysqli_query($con,$sql);

        if($result){
            echo "<div class='alert alert-success' role='alert'>
            Your Account has been created
            </div>";
            
            // $s="CREATE TABLE `socialmedia`.`$email` ( `sr no` INT NOT NULL AUTO_INCREMENT ,  `message` TEXT NOT NULL ,  `filename` VARCHAR(100) NOT NULL ,  `time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,    PRIMARY KEY  (`sr no`)) ENGINE = InnoDB;";
            $s="CREATE TABLE `socialmedia`.`$email` ( `sr no` INT NOT NULL AUTO_INCREMENT ,  `heading` TEXT NOT NULL ,  `message` TEXT NOT NULL ,  `filename` VARCHAR(100) NOT NULL ,  `time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,    PRIMARY KEY  (`sr no`)) ENGINE = InnoDB;";
        
            $exe=mysqli_query($con,$s);
        
            echo "<script>window.location.href='Login.php'</script>";
        }
        else{
            echo "Please try again";
        }

        
    }

}
?>