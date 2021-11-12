<?php require 'config.php'?>
<?php

    $query = "SELECT * FROM categories";
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
    
        <div class="food">
            <div class="container mt-5">
            <div class="section-header text-center">
                    <h2>All Categories</h2>
                </div>
                <div class="row align-items-center">

                <?php 
                foreach($result as $val) {?>
                    <div class="col-md-3">
                        <div class="food-item">
                            <i class="<?php echo $val['cat_img'];?>"></i>
                            <h2><?php echo $val['cat_name'];?></h2>
                            <a href="shop.php?id=<?php echo $val['cat_id'];?>">Related Shops</a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
        <!-- categories End -->

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
