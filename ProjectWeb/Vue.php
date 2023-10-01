<?php
include("config.php");
$sql = "select * from cars";
$r = mysqli_query($con,$sql);
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
    <table>
        <tr>
            <td><b>Name</b></td>
            <td><b>Price</b></td>
            <td><b>CC</b></td>
            <td><b>Type</b></td>
            <td><b>Image</b></td>
            <td><b>Mileage</b></td>
            <td><b>Fuel</b></td>
            <td><b>Transmission</b></td>
            <td><b>Bhp</b></td>
            <td><b>Seating</b></td>
        </tr>
        <?php
        while($res = mysqli_fetch_array($r))
        {
        ?>
        <tr>
            <td><?php echo $res['name']; ?></td>
            <td><?php echo $res['price']; ?></td>
            <td><?php echo $res['cc']; ?></td>
            <td><?php echo $res['type']; ?></td>
            <td><img src="<?php echo $res['image']; ?>" height="50px" width="100px"></td>
            <td><?php echo $res['milease']; ?></td>
            <td><?php echo $res['fuel']; ?></td>
            <td><?php echo $res['transmission']; ?></td>
            <td><?php echo $res['bhp']; ?></td>
            <td><?php echo $res['seat']; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>