<?php
include("config.php");
$status = $_GET['a1'];
$id = $_GET['a2'];
$bookid = $_GET['a3'];
echo $status;
echo $id;
echo $bookid;

$sql = "update booking set status='$status' where id='$bookid'";
$r = mysqli_query($con,$sql);

if($r == 1)
{
    header("location:Show Booking.php?msg=Update Done&id=$id");
}
else{
    header("location:Show Booking.php?msg=Update Not Done&id=$id");
}
?>