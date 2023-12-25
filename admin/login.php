<?php
$email = $_POST['email'];
$password = $_POST['password'];
include '../conn/conn.php';

echo $sql = "SELECT * FROM `admin` WHERE email='$email' and password='$password'";

$run =  mysqli_query($conn,$sql);
$num = mysqli_num_rows($run);
echo $num;
if($num>0)
{
    header("location:dashboard.php");
}
else{
    header("location:index.php");

}




?>