<?php

include '../conn/conn.php';

$id = $_GET['id'];
$run = mysqli_query($conn,"DELETE FROM `user` WHERE id='$id'");

if($run)
{
    header("location:slinks.php?status=delete");
}






?>