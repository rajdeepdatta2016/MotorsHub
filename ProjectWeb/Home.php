<?php
include("config.php");
include("session_check.php");
$sql = "select * from cars";

$username = $_GET['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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
                    <h1 class="text-uppercase text-primary mb-1">Motors Hub</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="Home.php?username=<?php echo $username; ?>" class="nav-item nav-link active">Home</a>
                        <a href="About.php?username=<?php echo $username; ?>" class="nav-item nav-link">About</a>
                        <a href="Booking Details.php?username=<?php echo $username; ?>" class="nav-item nav-link">Booking Details</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Car Types</a>
                            <div class="dropdown-menu rounded-0 m-0">
                            <a href="Types.php?types=Hatchback&username=<?php echo $username; ?>" class="dropdown-item">HatchBack</a>
                                <a href="Types.php?types=Sedan&username=<?php echo $username; ?>" class="dropdown-item">Sedan</a>
                                <a href="Types.php?types=SUV&username=<?php echo $username; ?>" class="dropdown-item">SUV</a>
                                <a href="Types.php?types=EV&username=<?php echo $username; ?>" class="dropdown-item">EV</a>
                                <a href="Types.php?types=Luxury-Sedan&username=<?php echo $username; ?>" class="dropdown-item">Luxury Sedan</a>
                                <a href="Types.php?types=Luxury-EV&username=<?php echo $username; ?>" class="dropdown-item">Luxury EV</a>
                                <a href="Types.php?types=Luxury-SUV&username=<?php echo $username; ?>" class="dropdown-item">Luxury SUV</a>
                                <a href="Types.php?types=Luxury-Sports&username=<?php echo $username; ?>" class="dropdown-item">Luxury Sports</a>
                                <a href="Types.php?types=Full-Size-Luxury&username=<?php echo $username; ?>" class="dropdown-item">Full Size Luxury</a>
                            </div>
                        </div>
                        <a href="Brands.php?username=<?php echo $username; ?>" class="nav-item nav-link">Brands</a>
                        <a href="Change Password.php?username=<?php echo $username; ?>" class="nav-item nav-link">Change Password</a>
                        <a href="Contact.php?username=<?php echo $username; ?>" class="nav-item nav-link">Contact</a>
                        <a href="Log Out.php" class="nav-item nav-link">Log Out</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->



     <!-- Carousel Start -->
     <div class="container-fluid p-0" style="margin-bottom: 90px;">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Book A Car</h4>
                            <h1 class="display-1 text-white mb-md-4">Best Luxury Sedan Cars In Your Location</h1>
                            <a href="Types.php?types=Luxury-Sedan&username=<?php echo $username; ?>" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Book Cars In Lowest Price</h4>
                            <h1 class="display-1 text-white mb-md-4">Best Brands of Car in Your Location</h1>
                            <a href="Brands.php?username=<?php echo $username; ?>" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->




    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-1 text-primary text-center">01</h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Welcome To <span class="text-primary">Motors Hub</span></h1>
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <img class="w-75 mb-4" src="img/about.png" alt="">
                    <p>This Website is made on 2023 at Kolkata under the <a href="https://www.ardentcollaborations.com/">ARDENT COMPUTECH PVT. LTD.</a> made by <b>Rajdeep Datta, Raksha Raj and Soumyaraj Datta</b>; Student of <a href="https://iutripura.edu.in/">ICFAI UNIVERSITY TRIPURA</a>.<br> <a href="Home.html">MOTORS HUB Tech's</a> mission is to provide the proper details of any cars with their delightful prices and a way where the Dealer and Buyer can connect with each other very easily.</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-2x fa-headset text-secondary"></i>
                        </div>
                        <h4 class="text-uppercase m-0">24/7 Cars Booking Available</h4>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-secondary p-4 mb-4" style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-2x fa-car text-secondary"></i>
                        </div>
                        <h4 class="text-light text-uppercase m-0">Check Car's Details Anytime</h4>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-2x fa-map-marker-alt text-secondary"></i>
                        </div>
                        <h4 class="text-uppercase m-0">Best Price Car In Your Location</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->




    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-1 text-primary text-center">02</h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Our Services</h1>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                                <i class="fa fa-2x fa-taxi text-secondary"></i>
                            </div>
                            <h1 class="display-2 text-white mt-n2 m-0">01</h1>
                        </div>
                        <h4 class="text-uppercase mb-3">Car Checking</h4>
                        <p class="m-0">Here You Can Check Any Brands And Any Types of Cars In A Few Minutes..</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="service-item active d-flex flex-column justify-content-center px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                                <i class="fa fa-2x fa-money-check-alt text-secondary"></i>
                            </div>
                            <h1 class="display-2 text-white mt-n2 m-0">02</h1>
                        </div>
                        <h4 class="text-uppercase mb-3">Car Details</h4>
                        <p class="m-0">All Types of Cars Full Details Including Price and Booking Are Available in Our Website</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                                <i class="fa fa-2x fa-car text-secondary"></i>
                            </div>
                            <h1 class="display-2 text-white mt-n2 m-0">03</h1>
                        </div>
                        <h4 class="text-uppercase mb-3">Car Inspection</h4>
                        <p class="m-0">One Stop Destination For All Brands and Types of Cars</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                                <i class="fa fa-2x fa-cogs text-secondary"></i>
                            </div>
                            <h1 class="display-2 text-white mt-n2 m-0">04</h1>
                        </div>
                        <h4 class="text-uppercase mb-3">Car Booking</h4>
                        <p class="m-0">Book Your Dream Car in Just One Click.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                                <i class="fa fa-2x fa-spray-can text-secondary"></i>
                            </div>
                            <h1 class="display-2 text-white mt-n2 m-0">05</h1>
                        </div>
                        <h4 class="text-uppercase mb-3">Low Price</h4>
                        <p class="m-0">Luxury Cars at Lowest Price Available Here</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                                <i class="fa fa-2x fa-pump-soap text-secondary"></i>
                            </div>
                            <h1 class="display-2 text-white mt-n2 m-0">06</h1>
                        </div>
                        <h4 class="text-uppercase mb-3">Import Cars</h4>
                        <p class="m-0">Import Your Dream Car From Here.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->



     <!-- Banner Start -->
     <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-banner py-5 px-4 text-center">
                <div class="py-5">
                    <h1 class="display-1 text-uppercase text-primary mb-4">20% OFF</h1>
                    <h1 class="text-uppercase text-light mb-4">Special Offer For New Members</h1>
                    <p class="mb-4">Only for Sunday from 1st July to 31th July 2023</p>
                    <a class="btn btn-primary mt-2 py-3 px-5" href="../Registration.php">Register Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->





    <!-- Book A Hatchback Car Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-1 text-primary text-center">03</h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Find Your Dream Hatchback Car</h1>

            
            <div class="row">

                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 9)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>



                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 14)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>




                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 15)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>



                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 11)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&userusername=<?php echo $userusername; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&userusername=<?php echo $userusername; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>




                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 12)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>user
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>




                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 18)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>


            </div>
        </div>
    </div>
    <!-- Book A Hatchback Car End -->








    <!-- Book SUV Car Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-1 text-primary text-center">04</h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Find Your Dream SUV Car</h1>

            
            <div class="row">

                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 8)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>



                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 13)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>




                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 20)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>



                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 21)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>




                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 22)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>




                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 23)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>


            </div>
        </div>
    </div>
    <!-- Book A SUV Car End -->












    <!-- Book A Sedan Car Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-1 text-primary text-center">05</h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Find Your Dream Sedan Car</h1>

            
            <div class="row">

                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 7)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>



                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 17)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>




                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 32)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>



                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 37)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>




                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 39)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>




                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 38)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>


            </div>
        </div>
    </div>
    <!-- Book A Sedan Car End -->













    <!-- Book A Luxury-Sedan Car Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-1 text-primary text-center">06</h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Find Your Dream Luxury Sedan Car</h1>

            
            <div class="row">

                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 2)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>



                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 4)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>




                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 6)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>



                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 40)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>




                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 42)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>




                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 41)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>


            </div>
        </div>
    </div>
    <!-- Book A Luxury Sedan Car End -->














    <!-- Book A EV Car Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-1 text-primary text-center">07</h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Find Your Dream EV Car</h1>

            
            <div class="row">

                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 19)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>



                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 28)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>




                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 43)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>



                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 44)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>




                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 45)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>




                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 46)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>


            </div>
        </div>
    </div>
    <!-- Book A EV Car End -->







    <!-- Book A Luxury SUV Car Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-1 text-primary text-center">08</h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Find Your Dream Luxury SUV Car</h1>

            
            <div class="row">

                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 29)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>



                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 30)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>




                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 47)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>



                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 34)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>




                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 35)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>




                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 48)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>


            </div>
        </div>
    </div>
    <!-- Book A Luxury SUV Car End -->












    <!-- Book A Luxury EV Car Start -->user
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-1 text-primary text-center">09</h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Find Your Dream Luxury EV Car</h1>

            
            <div class="row">

                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 31)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>



                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 49)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>




                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 50)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>



                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 51)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>




                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 52)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>




                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 53)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>


            </div>
        </div>
    </div>
    <!-- Book A Luxury EV Car End -->






    <!-- Book A Luxury Sports Car Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-1 text-primary text-center">10</h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Find Your Dream Luxury Sports Car</h1>

            
            <div class="row">

                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 1)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>



                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 33)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>




                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 36)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>



                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 55)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>




                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 5)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>




                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 56)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>


            </div>
        </div>
    </div>
    <!-- Book A Luxury Sports Car End -->






    <!-- Book A Full Size Luxury Car Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-1 text-primary text-center">11</h1>
            <h1 class="display-4 text-uppercase text-center mb-5">Find Your Dream Full Size Luxury Car</h1>

            
            <div class="row">

                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 54)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>



                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 57)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>




                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 3)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>



                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 58)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>




                <div class="col-lg-4 col-md-6 mb-2">
                    <?php
                    $r = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($r))
                    {
                        if($res['id'] == 59)
                        {
                    ?>
                    <div class="rent-item mb-4">
                        <a href="Details.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>"><img class="img-fluid mb-4" src="<?php echo $res['image']; ?>" alt=""></a>
                        <h4 class="text-uppercase mb-4"><?php echo $res['name']; ?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $res['cc']; ?></span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span><?php echo $res['transmission']; ?></span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span><?php echo $res['price']; ?></span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="Booking.php?id=<?php echo $res['id']; ?>&username=<?php echo $username; ?>">Book Now</a>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Book A Full Size Luxury Car End -->







    <!-- Banner Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row mx-0">
                <div class="col-lg-6 px-0">
                    <div class="px-5 bg-secondary d-flex align-items-center justify-content-between" style="height: 350px;">
                        <img class="img-fluid flex-shrink-0 ml-n5 w-50 mr-4" src="img/banner-left.png" alt="">
                        <div class="text-right">
                            <h3 class="text-uppercase text-light mb-3">Want to Buy Luxury Sedan Cars</h3>
                            <p class="mb-4">Get Your Favourite Luxury Sedan Cars at Perfect Price</p>
                            <a class="btn btn-primary py-2 px-4" href="Types.php?types=Luxury-Sedan&username=<?php echo $username; ?>">Start Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-0">
                    <div class="px-5 bg-dark d-flex align-items-center justify-content-between" style="height: 350px;">
                        <div class="text-left">
                            <h3 class="text-uppercase text-light mb-3">Want to Buy Sedan Cars</h3>
                            <p class="mb-4">Get Your Favourite Sedan Cars at Perfect Price</p>
                            <a class="btn btn-primary py-2 px-4" href="Types.php?types=Sedan&username=<?php echo $username; ?>">Start Now</a>
                        </div>
                        <img class="img-fluid flex-shrink-0 mr-n5 w-50 ml-4" src="img/banner-right.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->






    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="owl-carousel vendor-carousel">
                <div class="bg-light p-4">
                    <a href="Cars.php?brand=Suzuki&username=<?php echo $username; ?>"><img src="photos/BD2.png" height="100px" alt=""></a>
                </div>
                <div class="bg-light p-4">
                    <a href="Cars.php?brand=Hyundai&username=<?php echo $username; ?>"><img src="photos/BD3.gif" height="100px" alt=""></a>
                </div>
                <div class="bg-light p-4">
                    <a href="Cars.php?brand=Mahindra&username=<?php echo $username; ?>"><img src="photos/BD4.png" height="100px" alt=""></a>
                </div>
                <div class="bg-light p-4">
                    <a href="Cars.php?brand=Toyota&username=<?php echo $username; ?>"><img src="photos/BD5.png" height="100px" alt=""></a>
                </div>
                <div class="bg-light p-4">
                    <a href="Cars.php?brand=Kia&username=<?php echo $username; ?>"><img src="photos/BD6.png" height="100px" alt=""></a>
                </div>
                <div class="bg-light p-4">
                    <a href="Cars.php?brand=MG&username=<?php echo $username; ?>"><img src="photos/BD7.png" height="100px" alt=""></a>
                </div>
                <div class="bg-light p-4">
                    <a href="Cars.php?brand=BMW&username=<?php echo $username; ?>"><img src="photos/BD8.png" height="100px" alt=""></a>
                </div>
                <div class="bg-light p-4">
                    <a href="Cars.php?brand=Volkswagen&username=<?php echo $username; ?>"><img src="photos/BD9.png" height="100px" alt=""></a>
                </div>
                <div class="bg-light p-4">
                    <a href="Cars.php?brand=Land-Rover&username=<?php echo $username; ?>"><img src="photos/BD10.png" height="100px" alt=""></a>
                </div>
                <div class="bg-light p-4">
                    <a href="Cars.php?brand=Ford&username=<?php echo $username; ?>"><img src="photos/BD11.png" height="100px" alt=""></a>
                </div>
                <div class="bg-light p-4">
                    <a href="Cars.php?brand=Jeep&username=<?php echo $username; ?>"><img src="photos/BD12.png" height="100px" alt=""></a>
                </div>
                <div class="bg-light p-4">
                    <a href="Cars.php?brand=Volvo&username=<?php echo $username; ?>"><img src="photos/BD13.png" height="100px" alt=""></a>
                </div>
                <div class="bg-light p-4">
                    <a href="Cars.php?brand=Audi&username=<?php echo $username; ?>"><img src="photos/BD14.png" height="100px" alt=""></a>
                </div>
                <div class="bg-light p-4">
                    <a href="Cars.php?brand=Jaguar&username=<?php echo $username; ?>"><img src="photos/BD15.png" height="100px" alt=""></a>
                </div>
                <div class="bg-light p-4">
                    <a href="Cars.php?brand=Porsche&username=<?php echo $username; ?>"><img src="photos/BD16.png" height="100px" alt=""></a>
                </div>
                <div class="bg-light p-4">
                    <a href="Cars.php?brand=Lemborghini&username=<?php echo $username; ?>"><img src="photos/BD17.png" height="100px" alt=""></a>
                </div>
                <div class="bg-light p-4">
                    <a href="Cars.php?brand=Rolls-Royce&username=<?php echo $username; ?>"><img src="photos/BD18.png" height="100px" alt=""></a>
                </div>
                <div class="bg-light p-4">
                    <a href="Cars.php?brand=Ferrari&username=<?php echo $username; ?>"><img src="photos/BD19.png" height="100px" alt=""></a>
                </div>
                <div class="bg-light p-4">
                    <a href="Cars.php?brand=Mini&username=<?php echo $username; ?>"><img src="photos/BD20.png" height="100px" alt=""></a>
                </div>
                <div class="bg-light p-4">
                    <a href="Cars.php?brand=Mercedes&username=<?php echo $username; ?>"><img src="photos/BD21.png" height="100px" alt=""></a>
                </div>
                <div class="bg-light p-4">
                    <a href="Cars.php?brand=McLaren&username=<?php echo $username; ?>"><img src="photos/BD22.png" height="100px" alt=""></a>
                </div>
                <div class="bg-light p-4">
                    <a href="Cars.php?brand=Bugatti&username=<?php echo $username; ?>"><img src="photos/BD23.png" height="100px" alt=""></a>
                </div>
                <div class="bg-light p-4">
                    <a href="Cars.php?brand=Tesla&username=<?php echo $username; ?>"><img src="photos/BD24.png" height="100px" alt=""></a>
                </div>
                <div class="bg-light p-4">
                    <a href="Cars.php?brand=Bentley&username=<?php echo $username; ?>"><img src="photos/BD25.png" height="100px" alt=""></a>
                </div>
                <div class="bg-light p-4">
                    <a href="Cars.php?brand=Aston-Martin&username=<?php echo $username; ?>"><img src="photos/BD26.png" height="100px" alt=""></a>
                </div>
                <div class="bg-light p-4">
                    <a href="Cars.php?brand=Tata&username=<?php echo $username; ?>"><img src="photos/BD27.png" height="100px" alt=""></a>
                </div>
                <div class="bg-light p-4">
                    <a href="Cars.php?brand=Lexus&username=<?php echo $username; ?>"><img src="photos/BD29.png" height="100px" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->






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