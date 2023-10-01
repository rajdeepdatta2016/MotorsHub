<?php
include("config.php");
include("session_check.php");
$username = $_GET['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

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
                        <a href="Home.php?username=<?php echo $username; ?>" class="nav-item nav-link">Home</a>
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
                        <a href="Contact.php?username=<?php echo $username; ?>" class="nav-item nav-link active">Contact</a>
                        <a href="Log Out.php" class="nav-item nav-link">Log Out</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->



    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Contact US</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="Home.php?username=<?php echo $username; ?>">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Contact Us</h6>
        </div>
    </div>
    <!-- Page Header Start -->






    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Contact Us</h1>
            <div class="row">
                <div class="col-lg-7 mb-2">
                    <div class="contact-form bg-light mb-4" style="padding: 30px;">
                        <form action="ContactSend.php">
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input name="a1" type="text" class="form-control p-4" placeholder="Your Name" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input name="a2" type="email" class="form-control p-4" placeholder="Your Email" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <input name="a3" type="text" class="form-control p-4" placeholder="Subject" required="required">
                            </div>
                            <div class="form-group">
                                <textarea name="a4" class="form-control py-3 px-4" rows="5" placeholder="Message" required="required"></textarea>
                            </div>
                            <div class="col-6 form-group">
                                <input type="hidden" name="a5" class="form-control p-4" value="<?php echo $username; ?>">
                            </div>
                            <div>
                                <input type="submit" class="btn btn-primary py-3 px-5" value="Send Message">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 mb-2">
                    <div class="bg-secondary d-flex flex-column justify-content-center px-5 mb-4" style="height: 435px;">
                        <div class="d-flex mb-3">
                            <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Head Office</h5>
                                <p>ICFAI University Tripura, Kamalghat, Mohanpur, Tripura, 799211</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Branch Office</h5>
                                <p>Radhanagar, Agartala, Tripura, 799001</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Customer Service</h5>
                                <p>rajdeepdatta2016@gmail.com</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Return & Refund</h5>
                                <p class="m-0">dattasoumraj07@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->






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