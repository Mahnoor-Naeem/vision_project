<?php  include 'session.php';
include 'header.php';?>

<?php include'../config.php';
?>
<?php

$query = "SELECT * FROM  queries";
$result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Queries</title>.
    
    <link rel="stylesheet" href="assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/css/vertical-layout-light/style.css">
  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>
<body>

<div class="col-lg-9 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="display-3"><b>Queries</b></h4>
                  <p class="card-description">
                    Add class <code>ALL Queries</code>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered ">
                      <thead>
                        <tr class="table-success text-uppercase">
                          <th>
                            ID
                          </th>
                          <th>
                            customer name
                          </th>
                          <th>
                            customer email
                          </th>
                          <th>
                            Subject
                          </th>
                          <th>
                            Message
                          </th>
                                  
                        </tr>

                        <?php

foreach($result as $res){


?>



                      </thead>
                      <tbody>
                          <tr>
     <td> <?php echo  $res['q_id']; ?>  </td>
    <td> <?php echo  $res['q_name']; ?>  </td>
    <td> <?php echo  $res['q_email']; ?>  </td>
    <td> <?php echo  $res['q_sub']; ?>  </td>
    <td> <?php echo  $res['q_msg']; ?>  </td>

</tr>
                      </tbody>
                      <?php
}
?>
                    </table>
                  </div>
                </div>
              </div>
            </div>

<script src="../assets/vendors/chart.js/Chart.min.js"></script>
<script src="../assets/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="../assets/js/off-canvas.js"></script>
<script src="../assets/js/hoverable-collapse.js"></script>
<script src="../assets/js/calendar.js"></script>
<script src="../assets/js/template.js"></script>
<script src="../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<script src="../assets/js/Chart.roundedBarCharts.js"></script>

<script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/template.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>

</body>
</html>