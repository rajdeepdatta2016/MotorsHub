<?php
include("config.php");
$fname = $_GET['a1'];
$lname = $_GET['a2'];
$email = $_GET['a3'];
$num = $_GET['a4'];
$loc = $_GET['a5'];
$carname = $_GET['a6'];
$date = $_GET['a7'];
$adhar = $_GET['a9'];
$address = $_GET['a10'];
$status = $_GET['a12'];

$username = $_GET['a11'];

$sql = "insert into booking(fname,lname,email,number,loc,carname,date,adhar,address,username,status) values('$fname','$lname','$email','$num','$loc','$carname','$date','$adhar','$address','$username','$status')";
$r = mysqli_query($con,$sql);

if($r==1)
{
    header("location:Home.php?msg=Booking Done&username=$username");
}
else{
    header("location:Home.php?msg=Booking Not Done&username=$username");
}
?>