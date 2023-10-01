<?php
include("config.php");


$adminid = $_GET['a1'];
$name = $_GET['a2'];
$pwd = $_GET['a3'];
$pwd2 = $_GET['a4'];
$dob = $_GET['a5'];

$id = $_GET['a6'];
if($id == "rajdeepdatta2016@gmail.com")
{
    if($pwd == $pwd2)
    {
        $sql = "insert into admin(adminid,name,pwd,dob) values('$adminid','$name','$pwd','$dob')";
        $r = mysqli_query($con,$sql);
        if($r == 1)
        {
            header("location:Insert Admin.php?msg=Insertion Done&id=$id");
        }
        else{
            header("location:Insert Admin.php?msg=Insertion Not Done&id=$id");
        }
    }
    else{
        header("location:Insert Admin.php?msg=Password Not Matched&id=$id");
    }
}
else{
    header("location:Insert Admin.php?msg=You are not verified to Insert Admin&id=$id");
}
?>