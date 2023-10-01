<?php
include("config.php");
session_destroy();
header("location:../Motorshub.php?msg=Logged Out");
?>
