<?php include 'header.php';
include 'config.php';

?>
<?php
$cat_id = $_GET['cat_id'];

$query ="SELECT * FROM categories WHERE cat_id = '$cat_id'";
$result = mysqli_query($con, $query);


foreach($result as $value){
    $cat_id = $value['cat_id'];
    $cat_name = $value['cat_name'];

}

if (isset($_POST['btnupdate'])){

    $cat_name = $_POST['cat_name'];
    $cat_img = $_POST['cat_img'];

    $query = "UPDATE categories SET cat_name='$cat_name',cat_img='$cat_img' where cat_id='$cat_id' ";

    $res = mysqli_query($con, $query);

    if($res){
        $alert = "Updated Succesfully!";
    
    }else{
        $err = "Updated Un-succesfully!";
    }



}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>edit category</title>
  <!-- bootstrap-- -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/vendors/select2/select2.min.css">
  <link rel="stylesheet" href="assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/vertical-layout-light/style.css">
  <link rel="shortcut icon" href="assets/images/favicon.png" />
  
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>
<body>
  







<div class="col-9    grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title"><b>EDIT A CATEGORY</b></h6>
                  <?php if(isset($alert)){?>
	<div class="alert alert-success" role="alert">
  <?php echo $alert; ?> 
                  </div>
<?php
} ?>
           <?php if(isset($err)){?>
	<div class="alert alert-danger" role="alert">
  <?php echo $err; ?> 
                  </div>
<?php
} ?>
<br>
                  <form class="forms-sample" action="" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Category Name</label>
                      <input type="text" class="form-control" name="cat_name" id="exampleInputName1"  value= "<?php echo $cat_name;   ?>" placeholder="Name" required>
    <input type="hidden" name="cat_id" value="<?php $cat_id; ?>">
             
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Category Image</label>
                      <input type="file" class="form-control" name="cat_img" id="exampleInputName1"  value= "<?php echo $cat_img;   ?>" placeholder="image" required>     
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" name="btnupdate">UPDATE</button>
               <button class="btn btn-light"><a href="all_cat.php">Cancel</button></a>
                  </form>
                </div>
              </div>
            </div>




















<!-- form js--- -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="assets/vendors/select2/select2.min.js"></script>
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/template.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <script src="assets/js/file-upload.js"></script>
  <script src="assets/js/typeahead.js"></script>
  <script src="assets/js/select2.js"></script>
<!-- end--- -->
<script src="../assets/vendors/chart.js/Chart.min.js"></script>
<script src="../assets/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="../assets/js/off-canvas.js"></script>
<script src="../assets/js/hoverable-collapse.js"></script>
<script src="../assets/js/calendar.js"></script>
<script src="../assets/js/template.js"></script>
<script src="../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<script src="../assets/js/Chart.roundedBarCharts.js"></script>


</body>

  </html>