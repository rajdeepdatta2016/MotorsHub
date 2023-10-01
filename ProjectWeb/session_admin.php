<?php
include("config.php");
if($_SESSION['info'] == "")
{
    header("location:../MotorshubAdmin.php?msg=Login First");
}
?>