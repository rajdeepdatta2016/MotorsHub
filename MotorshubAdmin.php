<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motors Hub Admin Login Page</title>



    <!-- CSS Files Start -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
    <!-- CSS Files End -->





    <!-- Internal CSS Start -->
    
    <style>
        nav.a{
            background-color: rgba(0,0,0,0.1);
            padding: 10px 590px;
            overflow: hidden;
        }
        nav a h1{
            color: #000047;
            font-size: 40px;
            font-weight: 900;
            font-family: arial black,sans-serif;
            text-shadow: 5px 5px rgba(0,0,0,0.5);
        }
        h3{
            font-weight: 900;
            text-shadow: 3px 3px rgba(0,0,0,0.5);
        }
        h2{
            font-weight: 900;
            text-shadow: 4px 4px rgba(0,0,0,0.5);
        }
    </style>
    <!-- Internal CSS End -->



</head>

<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">

    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="a">
                <a href="" class="navbar-brand">
                    <h1>Motors Hub</h1>
                </a>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->






    <!-- Login Section Start -->
    <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Admin Login Page</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	        <form action="admcode.php" class="signin-form" method=post>
		      		        <div class="form-group">
		      			        <input type="text" name="a1" class="form-control" placeholder="Enter Admin Id" required>
		      		        </div>
	                        <div class="form-group">
	                            <input id="password-field" type="password" name="a2" class="form-control" placeholder="Enter Password" required>
	                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	                        </div>
	                        <div class="form-group">
	            	            <input type="submit" class="form-control btn btn-primary submit px-3" value="Log In">
	                        </div>
	                    </form>
		            </div>
				</div>
			</div>
		</div>
	</section>
    <!-- Login Section End -->





    <!-- JavaScript Files -->
	<script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- JavaScript Files End -->

</body>
</html>