<?php
include("config.php");
include("session_admin.php");
$idd = $_GET['idd'];
$id = $_GET['id'];
$sql = "select * from cars where id='$idd'";
$r = mysqli_query($con,$sql);
$res = mysqli_fetch_array($r);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
     <!-- Topbar Start -->
     <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i>9366141289</a>
                    <span class="text-body">|</span>
                    <a class="text-body px-3" href="https://www.google.com/intl/en_in/gmail/about/"><i class="fa fa-envelope mr-2"></i>rajdeepdatta2016@gmail.com</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-3" href="https://www.facebook.com/profile.php?id=100059828147937&mibextid=ZbWKwL">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-body px-3" href="https://twitter.com/RAJDEEPDAT62711?t=jWmeJcIOdLw-1SD-fpTovw&s=09">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-body px-3" href="https://www.linkedin.com/in/rajdeep-datta-bbb0b3247">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-body px-3" href="https://instagram.com/ra_jd_eep_?igshid=MzNlNGNkZWQ4Mg==">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-body pl-3" href="https://youtube.com/@rjdattayt4346">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    




     <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-uppercase text-primary mb-1">Motors Hub Admin Page</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="AdminHome.php?id=<?php echo $id; ?>" class="nav-item nav-link">Home</a>
                        <a href="Insert Car.php?id=<?php echo $id; ?>" class="nav-item nav-link">Insert Cars</a>
                        <a href="Insert Admin.php?id=<?php echo $id; ?>" class="nav-item nav-link">Insert Admin</a>
                        <a href="Car Details.php?id=<?php echo $id; ?>" class="nav-item nav-link active">Show Car Details</a>
                        <a href="Show Booking.php?id=<?php echo $id; ?>" class="nav-item nav-link">Show Booking</a>
                        <a href="Show Contact.php?id=<?php echo $id; ?>" class="nav-item nav-link">Show Contact</a>
                        <a href="Log Out Admin.php" class="nav-item nav-link">Log Out</a>
                    </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->




    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Cars Details</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="AdminHome.php?id=<?php echo $id; ?>">AdminHome</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Cars Details</h6>
        </div>
    </div>
    <!-- Page Header Start -->





    <!-- Detail Start -->
    <div class="container-fluid pt-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase mb-5"><?php echo $res['name']; ?></h1>
            <div class="row align-items-center pb-2">
                <div class="col-lg-6 mb-4">
                    <img class="img-fluid" src="<?php echo $res['image']; ?>" alt="">
                </div>
                <div class="col-lg-6 mb-4">
                    <h4 class="mb-2">₹<?php echo $res['price']; ?></h4>
                    <div class="d-flex mb-3">
                        <h6 class="mr-2">Rating:</h6>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star-half-alt text-primary mr-1"></small>
                            <small>(250)</small>
                        </div>
                    </div>
                    <p><?php echo $res['details']; ?></p>
                    <div class="d-flex pt-1">
                        <h6>Share on:</h6>
                        <div class="d-inline-flex">
                            <a class="px-2" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="px-2" href=""><i class="fab fa-twitter"></i></a>
                            <a class="px-2" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="px-2" href=""><i class="fab fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-n3 mt-lg-0 pb-4">
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-car text-primary mr-2"></i>
                    <span>CC: <?php echo ("&nbsp; &nbsp;"); echo $res['cc']; ?></span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-cogs text-primary mr-2"></i>
                    <span>Type: <?php echo ("&nbsp; &nbsp;"); echo $res['type']; ?></span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-road text-primary mr-2"></i>
                    <span>Mileage: <?php echo ("&nbsp; &nbsp;"); echo $res['milease']; ?></span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-eye text-primary mr-2"></i>
                    <span>Fuel: <?php echo ("&nbsp; &nbsp;"); echo $res['fuel']; ?></span>
                </div>
                <br><br>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-car text-primary mr-2"></i>
                    <span>Transmission: <?php echo ("&nbsp; &nbsp;"); echo $res['transmission']; ?></span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-cogs text-primary mr-2"></i>
                    <span>BHP: <?php echo ("&nbsp; &nbsp;"); echo $res['bhp']; ?></span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-road text-primary mr-2"></i>
                    <span>Seat Capacity: <?php echo ("&nbsp; &nbsp;"); echo $res['seat']; ?></span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-eye text-primary mr-2"></i>
                    <span>Torque: <?php echo ("&nbsp; &nbsp;"); echo $res['torque']; ?></span>
                </div>
                <br><br>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-car text-primary mr-2"></i>
                    <span>Gearbox: <?php echo ("&nbsp; &nbsp;"); echo $res['gearbox']; ?></span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-cogs text-primary mr-2"></i>
                    <span>Top Speed: <?php echo ("&nbsp; &nbsp;"); echo $res['topspeed']; ?></span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-road text-primary mr-2"></i>
                    <span>Fuel Tank Capacity: <?php echo ("&nbsp; &nbsp;"); echo $res['fuelcapacity']; ?></span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-eye text-primary mr-2"></i>
                    <span>Dimensions: <?php echo ("&nbsp; &nbsp;"); echo $res['dimension']; ?></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->





    <!-- Related Car Start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <h2 class="mb-4">Related Cars</h2>
            <div class="owl-carousel related-carousel position-relative" style="padding: 0 30px;">
            <?php
            include("config.php");
            $sql1 = "select * from cars";
            $run = mysqli_query($con,$sql1);
            ?>
                <div class="rent-item">
                    <?php
                    while($row=mysqli_fetch_array($run))
                    {
                        if($row['id'] != $res['id'] and $row['type'] == $res['type'])
                        {
                    ?>
                    <a href="detailsAdmin.php?idd=<?php echo $row['id']; ?>&id=<?php echo $id; ?>"><img class="img-fluid mb-4" src="<?php echo $row['image']; ?>" alt=""></a>
                    <h4 class="text-uppercase mb-4"><?php echo $row['name']; ?></h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span><?php echo $row['cc']; ?></span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span><?php echo $row['transmission']; ?></span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>
                            <span><?php echo $row['price']; ?></span>
                        </div>
                    </div>
                    <?php
                        break;
                        }
                    }
                    ?>
                </div>


                <div class="rent-item">
                    <?php
                    while($row=mysqli_fetch_array($run))
                    {
                        if($row['type'] == $res['type'])
                        {
                    ?>
                    <a href="detailsAdmin.php?idd=<?php echo $row['id']; ?>&id=<?php echo $id; ?>"><img class="img-fluid mb-4" src="<?php echo $row['image']; ?>" alt=""></a>
                    <h4 class="text-uppercase mb-4"><?php echo $row['name']; ?></h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span><?php echo $row['cc']; ?></span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span><?php echo $row['transmission']; ?></span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>
                            <span><?php echo $row['price']; ?></span>
                        </div>
                    </div>
                    <?php
                        break;
                        }
                    }
                    ?>
                </div>


                <div class="rent-item">
                <?php
                    while($row=mysqli_fetch_array($run))
                    {
                        if($row['type'] == $res['type'])
                        {
                    ?>
                    <a href="detailsAdmin.php?idd=<?php echo $row['id']; ?>&id=<?php echo $id; ?>"><img class="img-fluid mb-4" src="<?php echo $row['image']; ?>" alt=""></a>
                    <h4 class="text-uppercase mb-4"><?php echo $row['name']; ?></h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span><?php echo $row['cc']; ?></span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span><?php echo $row['transmission']; ?></span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>
                            <span><?php echo $row['price']; ?></span>
                        </div>
                    </div>
                    <?php
                        break;
                        }
                    }
                    ?>
                </div>


                <div class="rent-item">
                <?php
                    while($row=mysqli_fetch_array($run))
                    {
                        if($row['type'] == $res['type'])
                        {
                    ?>
                    <a href="detailsAdmin.php?idd=<?php echo $row['id']; ?>&id=<?php echo $id; ?>"><img class="img-fluid mb-4" src="<?php echo $row['image']; ?>" alt=""></a>
                    <h4 class="text-uppercase mb-4"><?php echo $row['name']; ?></h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span><?php echo $row['cc']; ?></span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span><?php echo $row['transmission']; ?></span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>
                            <span><?php echo $row['price']; ?></span>
                        </div>
                    </div>
                    <?php
                        break;
                        }
                    }
                    ?>
                </div>


                <div class="rent-item">
                <?php
                    while($row=mysqli_fetch_array($run))
                    {
                        if($row['type'] == $res['type'])
                        {
                    ?>
                    <a href="detailsAdmin.php?idd=<?php echo $row['id']; ?>&id=<?php echo $id; ?>"><img class="img-fluid mb-4" src="<?php echo $row['image']; ?>" alt=""></a>
                    <h4 class="text-uppercase mb-4"><?php echo $row['name']; ?></h4>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span><?php echo $row['cc']; ?></span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span><?php echo $row['transmission']; ?></span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>
                            <span><?php echo $row['price']; ?></span>
                        </div>
                    </div>
                    <?php
                        break;
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Related Car End -->










    <!-- Footer Start -->
    <div class="container-fluid bg-secondary py-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Get In Touch</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-white mr-3"></i>Kamalghat, Mohanpur, Tripura</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-white mr-3"></i>9366141289</p>
                <p><i class="fa fa-envelope text-white mr-3"></i>rajdeepdatta2016@email.com</p>
                <h6 class="text-uppercase text-white py-2">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="https://twitter.com/RAJDEEPDAT62711?t=jWmeJcIOdLw-1SD-fpTovw&s=09"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="https://www.facebook.com/profile.php?id=100059828147937&mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="https://www.linkedin.com/in/rajdeep-datta-bbb0b3247"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square" href="https://instagram.com/ra_jd_eep_?igshid=MzNlNGNkZWQ4Mg=="><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Car Gallery</h4>
                <div class="row mx-n1">
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-1.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-2.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-3.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-4.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-5.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-6.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Newsletter</h4>
                <p class="mb-4">Register Here For Better usages</p>
                <div class="w-100 mb-3">
                <i>Thank You For Visiting Our Site</i>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark py-4 px-sm-3 px-md-5">
        <p class="mb-2 text-center text-body">&copy; <a href="#">MotorsHub</a>. All Rights Reserved.</p>
        <p class="m-0 text-center text-body">Designed by <a href="https://instagram.com/ra_jd_eep_?igshid=MzNlNGNkZWQ4Mg==">Rajdeep Datta</a></p>
    </div>
    <!-- Footer End -->







    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
     <script src="lib/easing/easing.min.js"></script>
     <script src="lib/waypoints/waypoints.min.js"></script>
     <script src="lib/owlcarousel/owl.carousel.min.js"></script>
     <script src="lib/tempusdominus/js/moment.min.js"></script>
     <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
     <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
     <!-- JavaScript Libraries End-->


     <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <!-- Template Javascript End -->

</body>
</html>