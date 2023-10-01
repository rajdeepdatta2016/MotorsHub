<?php
include("config.php");
$a = $_POST['a1'];
$b = $_POST['a2'];
$username = $_POST['a3'];

if($a == $b)
{
    $sql = "select * from user where username='$username'";
    $r = mysqli_query($con,$sql);
    if(mysqli_num_rows($r))
    {
        $sql1 = "update user set pwd='$a' where username='$username'";
        $r1 = mysqli_query($con,$sql1);
        if($r==1)
        {
            header("location:Home.php?msg=Password Changed&username=$username");
        }
        else{
            header("location:Change Password.php?msg=Password Not Changed&username=$username");
        }
    }
}
else{
    header("location:Change Password.php?msg=Password Not Matched&username=$username");
}
?>