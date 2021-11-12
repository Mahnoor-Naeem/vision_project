<?php include'config.php'; ?>
<?php 

$query="SELECT * from categories";
$result = mysqli_query($con, $query);

if(isset($_POST['order'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $cat_id = $_POST['category'];
    $city = $_POST['city'];
    $area = $_POST['area'];
    $address = $_POST['address'];

   

    $query = "INSERT INTO orders(order_name,order_email,order_category,order_city,order_area,order_address)VALUES('$name','$email','$cat_id','$city','$area','$address')";
    $booked = mysqli_query($con, $query); 

    if($booked){
        
        $alert = "conratulations! Your orders is booked. You will Shortly recieve an email.";
    }else{
        $error = "Unseccesfull!";
    }


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
</head>
<body>
<div class="col-lg-5">
                        <div class="booking-form">
                        <?php if(isset($alert)){?>
                    <div class="alert alert-success" role="alert">
  <?php echo $alert; ?> 
                  </div>
<?php
} ?>
           <?php if(isset($error)){?>
	<div class="alert alert-danger" role="alert">
  <?php echo $error; ?> 
                  </div>
<?php
} ?>
                            <form action="" method="post">
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control"  name="name"  placeholder="Name" required="required" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="far fa-user"></i></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="email" class="form-control" name="email"  placeholder="Email" required="required" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="far fa-envelope"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group">
                                        <select class="custom-select form-control" name="category" >
                                            <?php  
                                            foreach($result as $value)
                                        { ?>
                                         <option value="<?php echo $value['cat_id']; ?>">
                        <?php echo $value['cat_name']; ?>


                        <?php } ?>
                                        </select>
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-chevron-down"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="city"  placeholder="City" required="required" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-globe"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="area"  placeholder="Area" required="required" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-location-arrow"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control"  name="address" placeholder="Full address" required="required" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-map-marker"></i></div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                    <button class="btn custom-btn" name="order" type="submit">Book Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
</body>
</html>