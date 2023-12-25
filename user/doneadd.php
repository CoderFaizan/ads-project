<?php 
include '../conn/conn.php';
session_start(); 
$id = $_SESSION['id'];
 $reward=$_GET['reward'];

$sql = "UPDATE `user` SET `earning` = earning + $reward WHERE `user`.`id` = '$id'";

if(mysqli_query($conn,$sql))
{
    header("location:dashboard.php");
}

?>