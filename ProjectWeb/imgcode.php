<?php
include("config.php");
$name = $_POST['a1'];
$price = $_POST['a2'];
$cc = $_POST['a3'];
$type = $_POST['a4'];
$fname = $_FILES['a5']['name'];
$milease = $_POST['a6'];
$fuel = $_POST['a7'];
$transmission = $_POST['a8'];
$bhp = $_POST['a9'];
$seat = $_POST['a10'];
$torque = $_POST['a11'];
$gear = $_POST['a12'];
$top = $_POST['a13'];
$liter = $_POST['a14'];
$dimension = $_POST['a15'];
$brand = $_POST['a16'];
$details = $_POST['a17'];

$id = $_POST['a18'];

$url="photos/";
$furl=$url.$fname;

move_uploaded_file($_FILES['a5']['tmp_name'],$furl);


$sql = "insert into cars(name,price,cc,type,image,milease,fuel,transmission,bhp,seat,torque,gearbox,topspeed,fuelcapacity,dimension,brand,details) values('$name','$price','$cc','$type','$furl','$milease','$fuel','$transmission','$bhp','$seat','$torque','$gear','$top','$liter','$dimension','$brand','$details')";
$r = mysqli_query($con,$sql);
if($r == 1)
{
   header("location:Insert Car.php?id=$id&msg=Done");
}
else{
    header("location:AdminHome.php?id=$id&msg=Done");
}
?>