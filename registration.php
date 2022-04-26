<?php
require('connection.php');
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    $name = $_POST['name'];
    $email  = $_POST['email'];
    $mobile = $_POST['mobile'];
    
    $sql = "INSERT INTO user VALUES ('$name','$email',$mobile)";
    $result = mysqli_query($conn,$sql);
    if($result){ 
        echo "Registration Successfull";
    }else{
        echo "Registration Failed";
    }

}
?>