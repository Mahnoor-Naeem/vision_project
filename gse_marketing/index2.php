<?php require 'config.php'?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
        <title>GSE - Service providing Website</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="../lib/animate/animate.min.css" rel="stylesheet">
        <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="../lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/thisstyle.css" rel="stylesheet">

    </head>

    <body>
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand"><img src="img/logo.png" alt=""><span>GSE</span></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#service" class="nav-item nav-link">Services</a>
                        <a href="#booking" class="nav-item nav-link">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Carousel Start -->
        <div class="carousel" id="home">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/barber-shp1.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Quality <span>Controlled</span> & Safety</h1>
                            <p>
                            Quality control inspectors check the quality of incoming and outgoing materials or products for a company, as well as the production procedures.                            </p>
                            </p>
                            <div class="carousel-btn">
                                <a class="btn custom-btn" href="#booking">Book a Service</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/car-wash2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>24/7 <span>Customer</span> Service</h1>
                            <p> we are waiting for your response 24/7. any query or complaint we will gave you response as soon as possible.                            </p>

                            <div class="carousel-btn">
                                <a class="btn custom-btn" href="#booking">Book a Service</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/sport1.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Affordable and Upfront <span>Pricing</span></h1>
                            <p>
                            It provides opportunities for everyone to enjoy our service at an affordable price.                              </p>
                            <div class="carousel-btn">
                                <a class="btn custom-btn" href="#booking">Book a Service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
        
        
        <!-- Booking Start -->
        <div class="booking" id="booking">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="booking-content">
                            <div class="section-header">
                                <p>Book A Service</p>
                                <h2>Book Your Service</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                A leading digital agency based in Karachi,
                                providing you the best services in town.
                                <b>Global Source Enterprises</b> offers you
                                comprehensive digital marketing solutions
                                that you won't find anywhere else.   
                                </p>
                                <p>
                                It provides opportunities for everyone to enjoy our service at an affordable price.                        
                                          Quality control inspectors check the quality of incoming and outgoing materials or products for a company, as well as the production procedures.                            </p>
                                 </p>
                                 <p>The aim and priority of<b> GSE </b>are to add value to our consumers' lives by providing smart solutions to all their problems. Our pride is providing the most extensive range of services. From home maintenance to personal assistance. </p>
                            </div>
                        </div>
                    </div>
                    <?php include'book.php'; ?>
            </div>
        </div>
        <!-- Booking End -->
        

        <!-- About Start -->
        <div class="about" id="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/about.png" alt="Image">
                          
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-header">
                                <p>About Us</p>
                                <h2>Since 1990</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    A leading digital agency based in Karachi,
                                    providing you the best services in town.
                                    Global Source Enterprises offers you
                                    comprehensive digital marketing solutions
                                    that you won't find anywhere else.                                </p>
                                    <p>We make sure that your safety is never compromised. This is why we hire all the staff under the roof of <b>GSE</b>, just for your satisfaction.</p>
                                <p>
                                    Centre, Karachi, Pakistan<br>
                                    Phone: (021) 34554193<br>
                                    Email: support@gsemarketing.pk                                </p>
                                <a class="btn custom-btn" href="#booking">Book A service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
    
        <!-- Feature Start -->
        <!-- <div class="feature" id="service">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="section-header">
                            <p>Why Choose Us</p>
                            <h2>Our Top Services</h2>
                        </div>
                        <div class="feature-text">
                            <div class="feature-img">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="img/ac.jpeg" width="100%" alt="Image">
                                    </div>
                                    <div class="col-6">
                                        <img src="img/gen.jpg" alt="Image">
                                    </div>
                                    <div class="col-6">
                                        <img src="img/wash.jpg" alt="Image">
                                    </div>
                                    <div class="col-6">
                                        <img src="img/microwave.jpg" alt="Image">
                                    </div>
                                </div>
                            </div>
                            <p>We make sure that your safety is never compromised. This is why we hire all the staff under the roof of <b>GSE</b>, just for your satisfaction.</p>
                            <a class="btn custom-btn" href="#booking">Book A Service</a>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-cooking"></i>
                                    <h3>Home Appliance Repair</h3>
                                    <p>
                                    We make sure that your safety is never compromised. This is why we hire all the staff under the roof of GSE, just for your satisfaction.                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-courier"></i>
                                    <h3>Saloon At Home</h3>
                                    <p>
                                    WE provides opportunities for everyone to enjoy our service at an affordable price with Post service Gurantee.                              </p>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-medal"></i>
                                    <h3>Food At Your Door Step</h3>
                                    <p>
                                    Quality control inspectors check the quality of incoming and outgoing materials or products for a company, as well as the production procedures.                            </p>
                                    </p>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-medal"></i>
                                    <h3>24/7 customer service</h3>
                                    
                                    <p> we are waiting for your response 24/7. any query or complaint we will gave you response as soon as possible.                            </p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-courier"></i>
                                    <h3>On-time delivery</h3>
                                    <p>
                                        We Value your Time so we deliver your service on time and give you a post service gurantee.                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-courier"></i>
                                    <h3>On-time delivery</h3>
                                    <p>
                                        We Value your Time so we deliver your service on time and give you a post service gurantee.                                    </p>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Feature End -->

        <!-- category start -->
        <?php include 'home_categories.php'?>
        <!-- category End -->
           
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Contact Us</p>
                    <h2>Ask Question About Services</h2>
                </div>
                
               <?php include 'contact.php'; ?>
        </div>
        <!-- Contact End -->

        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">

                <div class="col-lg-5">
                    <div class="footer-contact">
                        <h2>GLOBAL SOURCE ENTERPRISES</h2>
                        <p>We make sure that your safety is never compromised. This is why we hire all the staff under the roof of <b>GSE</b>, just for your satisfaction.</p>
                        <div class="footer-social">
                            <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="mailto:support@agsemarketing.pk" target="_blank"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="footer-link">
                        <h2>Company</h2>
                        <a href="">Home</a>
                        <a href="">About</a>
                        <a href="">Categories</a>
                        <a href="">Book now</a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="footer-contact">
                        <h2>Contact Us</h2>
                        <!-- <p><i class="fa fa-map-marker-alt"></i>Office # S-133, 2nd Floor, City
                            Centre, Karachi, Pakistan</p> -->
                        <p><i class="fa fa-phone-alt"></i>(021) 34554193</p>
                        <p><i class="fa fa-envelope"></i>support@gsemarketing.pk
                        </p>
                    </div>
                </div>

                    <div class="col-md-6">
                        
                    </div>

                    </div>
                    </div> 
                   
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>© <span style="color: #fbaf32;"> GSE </span>2020. All rights reserved.</p>
                    
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
