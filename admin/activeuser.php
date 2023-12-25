<?php

include '../conn/conn.php';

$id = $_GET['id'];
$run = mysqli_query($conn,"UPDATE `user` SET `status` = '1' WHERE`id` = '$id'");

if($run)
{
    header("location:user.php?status=active");
}






?>