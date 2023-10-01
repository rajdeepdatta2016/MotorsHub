<?php
include("config.php");
$name = $_GET['a1'];
$email = $_GET['a2'];
$subject = $_GET['a3'];
$msg = $_GET['a4'];

$username = $_GET['a5'];

$sql = "insert into contact(name,email,subject,msg,username) values('$name','$email','$subject','$msg','$username')";
$r = mysqli_query($con,$sql);

if($r==1)
{
    header("location:Contact.php?msg=Done&username=$username");
}
else{
    header("location:Contact.php?msg=Not Done&username=$username");
}
?>