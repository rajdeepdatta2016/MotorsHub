<?php
include("config.php");
if($_SESSION['info'] == "")
{
    header("location:../Motorshub.php?msg=Login First");
}
?>