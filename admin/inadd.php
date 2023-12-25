<?php
$name = $_POST['name'];
 $time = $_POST['time'];
 $reward = $_POST['reward'];
 $price = $_POST['price'];
 $level = $_POST['level'];
include '../conn/conn.php';

$sql = "INSERT INTO `ads`( `name`, `time`, `reward`, `price`, `level`) VALUES ('$name','$time','$reward','$price','$level')";

$run =  mysqli_query($conn,$sql);
if($run)
{
    header("location:addadds.php?sms=ok");
}




?>