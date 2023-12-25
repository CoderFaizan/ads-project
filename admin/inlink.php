<?php
$name = $_POST['name'];
 $link = $_POST['link'];
 $slink = $_POST['slink'];
 $level = $_POST['level'];
include '../conn/conn.php';

    $r = "SELECT * FROM links WHERE slink='$slink'";
    $rr = mysqli_query($conn,$r);
    $nk = mysqli_num_rows($rr);
    if($nk>0)
    {
        
    header("location:addlink.php?status=ok");
    }else{

$sql = "INSERT INTO `links`( `name`, `link`, `slink`, `status`) VALUES ('$name','$link','$slink','0')";

$run =  mysqli_query($conn,$sql);
if($run)
{
    header("location:addlink.php?status=inserted");
}


    }

?>