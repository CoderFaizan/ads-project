<?php

include '../conn/conn.php';

$id = $_GET['id'];
$run = mysqli_query($conn,"UPDATE `links` SET `status` = '0' WHERE `links`.`id` = '$id'");

if($run)
{
    header("location:slinks.php?status=deactive");
}






?>