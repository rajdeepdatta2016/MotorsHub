<?php
include("ProjectWeb/config.php");
$username = $_GET['a1'];
$email = $_GET['a2'];
$num = $_GET['a3'];

$sql = "select * from user where username = '$username'";
$r = mysqli_query($con,$sql);
$r1 = mysqli_query($con,$sql);

if(mysqli_num_rows($r))
{
    while($res = mysqli_fetch_array($r1))
    {
        if($res['email'] == $email and $res['num'] == $num)
        {
            header("location:ProjectWeb/Change Password.php?username=$username");
        }
        else{
            header("location:Forget Password.php?msg=Verification Failed");
        }
    }
}
else{
    header("location:Motorshub.php?msg=Wrong Username Input");
}
?>