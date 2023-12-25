<?php
echo $name = $_POST['name'];
echo $email = $_POST['email'];
echo $password = $_POST['password'];
include '../conn/conn.php';

$sql = "INSERT INTO `user`(`First Name`, `email`, `password`) VALUES ('$name','$email','$password')";

$run =  mysqli_query($conn,$sql);
if($run)
{
    header("location:index.php?sms=ok");
}




?>