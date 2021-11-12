<?php include '../config.php';

$id=$_GET['cat_id'];

$query="DELETE FROM categories where cat_id ='$id'";

$result= mysqli_query($con,$query);

header("location: all_cat.php");

?>