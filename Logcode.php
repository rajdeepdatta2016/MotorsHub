<?php
include("ProjectWeb/config.php");
$a = $_GET['a1'];
$b = $_GET['a2'];

$sql = "select * from user where username='$a' and pwd='$b'";
$r = mysqli_query($con,$sql);
$res = mysqli_fetch_array($r);

$_SESSION['info'] = $res;

if(mysqli_num_rows($r))
{
    header("location:ProjectWeb/Home.php?username=$a");
}
else{
    header("location:Motorshub.php?msg=Wrong Username or Password");
}
?>