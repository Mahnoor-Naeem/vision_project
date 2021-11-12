<?php require 'config.php'?>
<?php
// $id = $_GET['id'];
$id = 1;

    $query = "SELECT * FROM categories WHERE display_home = '$id'";
    $result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Burger King - Food Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">


    </head>

    <body>
    
        <!-- categories start -->
        <div class="row align-items-center">

                    <?php foreach($result as $val) {?>
                        <div class="col-md-3">
                            <div class="food-item">
                                <i class="<?php echo $val['cat_img'];?>"></i>
                                <h2><?php echo $val['cat_name'];?></h2>
                                <a href="shop.php?id=<?php echo $val['cat_id'];?>">Related Shops</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
        <!-- categories End -->


    </body>
</html>
