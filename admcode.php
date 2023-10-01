<?php
include("ProjectWeb/config.php");
$a = $_POST['a1'];
$b = $_POST['a2'];

$sql = "select * from admin where adminid = '$a' and pwd = '$b'";
$r = mysqli_query($con,$sql);
$res = mysqli_fetch_array($r);

$_SESSION['info'] = $res;

if(mysqli_num_rows($r))
{
    header("location:ProjectWeb/AdminHome.php?id=$a");
}
else{
    header("location:MotorshubAdmin.php?msg=Wrong Id or Password");
}
?>