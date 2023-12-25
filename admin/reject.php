<?php 

include '../conn/conn.php'; 



$id = $_GET['id'];
$user = $_GET['user'];
$amount = $_GET['amount'];

$sql = "UPDATE `widthdraw` SET `status` = '2' WHERE `id` = '$id'";

 $c = "UPDATE `user` SET `earning` = earning + $amount WHERE `id` = '$user'";


$run = mysqli_query($conn,$sql);
$run1 = mysqli_query($conn,$c);

if($run && $run1)
{
    header("location:withdraw.php?status=reject");
}











?>