<?php
include("config.php");
session_destroy();
header("location:../MotorshubAdmin.php?msg=Logged Out");
?>
