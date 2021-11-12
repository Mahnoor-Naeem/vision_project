<?php require 'config.php'?>
<?php
$id = $_GET['id'];

    $query = "SELECT * FROM shops WHERE cat_id = '$id'";
    $result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>GSE - Service providing Website</title>
        <!-- Favicon -->
        <link href="img/logo.png" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/thisstyle.css" rel="stylesheet">

    </head>

    <body>
        <!-- Nav Bar Start -->
        <?php include 'header.php'?>
        <!-- Nav Bar End -->
    
        <!-- Team Start -->
        <div class="team">
            <div class="container mt-5">
                <div class="section-header text-center">
                    <!-- <p>Our Team</p> -->
                    <h2>Our Shop/Company/Organization</h2>
                </div>
                <div class="row">
                    <?php foreach($result as $val) { ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="img/shops/<?php echo $val['shop_img'];?>" alt="Image">
                                    <div class="team-social">
                                        <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="mailto:<?php echo $shop_email ?>" target="_blank"><i class="fa fa-envelope"></i></a>
                                    </div>
                                </div>
                                <div class="team-text">
                                    <div class="text text-left">
                                    <h2><?php echo $val['shop_name'];?></h2>
                                    <a href="shop_detail.php?id=<?php echo $val['shop_id'];?>" class="view">More Details</a>
                                    </div>
                                    <p><?php echo $val['shop_rating'];?><i class="fas fa-star"></i></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Team End -->

        <!-- Footer Start -->
        <?php include 'footer.php'?>
        <!-- Footer End -->

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
