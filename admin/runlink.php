<?php 
include '../conn/conn.php'; 


if(isset($_GET['l']))
{
    $link = $_GET['l'];
$sql = "SELECT * FROM `links` where slink='$link'";
$count = "UPDATE `links` SET `count` = count + 1 WHERE slink = '$link'";
mysqli_query($conn,$count);
$run = mysqli_query($conn,$sql);

$fetch = mysqli_fetch_assoc($run);

$main_link = $fetch['link'];

header("Location:".$main_link);

}



?>