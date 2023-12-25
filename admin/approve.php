<?php 

include '../conn/conn.php'; 
$id = $_GET['id'];
$user = $_GET['user'];

$sql = "UPDATE `widthdraw` SET `status` = '1' WHERE `id` = '$id'";
$run = mysqli_query($conn,$sql);

if($run)
{
    header("location:withdraw.php?status=approve");
}








?>