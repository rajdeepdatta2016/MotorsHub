<?php
include("ProjectWeb/config.php");
$name = $_GET['a1'];
$username = $_GET['a2'];
$pwd = $_GET['a3'];
$pwd2 = $_GET['a4'];
$email = $_GET['a5'];
$gender = $_GET['a6'];
$dob = $_GET['a7'];
$num = $_GET['a8'];

if($pwd == $pwd2 and $pwd2 == $pwd)
{
    try{
    $sql = "insert into user(name,username,pwd,email,gender,dob,num) values('$name','$username','$pwd','$email','$gender','$dob','$num')";
    $r = mysqli_query($con,$sql);
    }catch(Exception $e)
    {
        echo ($e);
    }
    if($r == 1)
    {
        header("location:Motorshub.php?msg=Done");
    }
    else{
        header("location:Registration.php?msg=Already Have This User Name");
    }
}
else{
    header("location:Registration.php?msg=Password Not Matched");
}
?>