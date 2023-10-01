<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Upload Page For Admins</h1>
    <form action="imgcode.php" method="post" enctype="multipart/form-data">
        <input type="text" name="a1" placeholder="Enter Car's Name">
        <br><br>
        <input type="text" name="a2" placeholder="Enter Car's Price">
        <br><br>
        <input type="text" name="a3" placeholder="Enter CC">
        <br><br>
        <input type="text" name="a4" placeholder="Enter Car's Type">
        <br><br>
        <input type="file" name="a5">
        <br><br>
        <input type="text" name="a6" placeholder="Enter Milease">
        <br><br>
        <input type="text" name="a7" placeholder="Enter Fuel Type">
        <br><br>
        <input type="text" name="a8" placeholder="Enter Transmission Type">
        <br><br>
        <input type="text" name="a9" placeholder="Enter Car's BHP">
        <br><br>
        <input type="text" name="a10" placeholder="Enter Car's Seating Capacity">
        <br><br>
        <input type="text" name="a11" placeholder="Enter Car's Torque">
        <br><br>
        <input type="text" name="a12" placeholder="Enter Car's Gearbox Speed">
        <br><br>
        <input type="text" name="a13" placeholder="Enter Car's Top Speed">
        <br><br>
        <input type="text" name="a14" placeholder="Enter Car's Fuel Tank Capacity">
        <br><br>
        <input type="text" name="a15" placeholder="Enter Car's Dimensions">
        <br><br>
        <input type="text" name="a16" placeholder="Enter Car's Brand">
        <br><br>
        <textarea name="a17" rows="20" col="500" placeholder="Enter Car Details"></textarea>
        <br><br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>