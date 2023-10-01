<?php
include("config.php");
$id = $_GET['id'];
$username = $_GET['username'];

$sql = "delete from booking where id = '$id'";
$r = mysqli_query($con,$sql);

if($r == 1)
{
    header("location:Booking Details.php?msg=Booking Has Canceled&username=$username");
}
else{
    header("location:Bookin Details.php?msg=Booking Not Canceled&username=$username");
}
?>