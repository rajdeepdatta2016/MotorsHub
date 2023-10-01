<?php
include("config.php");
$name = $_POST['a1'];
$price = $_POST['a2'];
$cc = $_POST['a3'];
$type = $_POST['a4'];
$milease = $_POST['a5'];
$fuel = $_POST['a6'];
$transmission = $_POST['a7'];
$bhp = $_POST['a8'];
$seat = $_POST['a9'];
$torque = $_POST['a10'];
$gear = $_POST['a11'];
$top = $_POST['a12'];
$liter = $_POST['a13'];
$dimension = $_POST['a14'];
$brand = $_POST['a15'];

$id = $_POST['a16'];
$car = $_POST['a17'];

$url="photos/";
$furl=$url.$fname;

move_uploaded_file($_FILES['a5']['tmp_name'],$furl);

$sql = "update cars set name='$name', price='$price', cc='$cc', type='$type', milease='$milease', fuel='$fuel', transmission='$transmission', bhp='$bhp', seat='$seat', torque='$torque', gearbox='$gear', topspeed='$top', fuelcapacity='$liter', dimension='$dimension', brand='$brand' where id='$car'";
$r = mysqli_query($con,$sql);
if($r == 1)
{
   header("location:AdminHome.php?id=$id&msg=Done");
}
else{
    header("location:AdminHome.php?id=$id&msg=Not Done");
}
?>