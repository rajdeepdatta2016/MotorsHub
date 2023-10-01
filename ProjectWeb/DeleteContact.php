<?php
include("config.php");
$id = $_GET['id'];
$deleteid = $_GET['deleteid'];

$sql = "delete from contact where id = '$deleteid'";
$r = mysqli_query($con,$sql);
if($r==1)
{
    header("location:Show Contact.php?msg=Delete Done&id=$id");
}
else{
    header("location:Show Contact.php?msg=Delete Not Done&id=$id");
}
?>