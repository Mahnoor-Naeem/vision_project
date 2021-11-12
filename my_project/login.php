
<?php  include 'config.php'; ?>
<?php

session_start();

if(isset($_POST['btnlogin'])){

        $email = $_POST['email'];
        $pass = $_POST['password'];

        $query = "SELECT 'email', 'password' FROM users Where email = '$email' and password = '$pass' "; 
        $result = mysqli_query($con, $query);
        $row = mysqli_num_rows($result);

        if($row > 0 ){
$_SESSION["email"] = $email;

            header('location: admin_panel/dashboard.php');
        }else{
            $error = "Please enter correct Username / Password";
        }

    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="assets/login-css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="assets/login-img/wave.png">
	<div class="container">
		<div class="img">
			<img src="assets/login-img/bg.svg">
		</div>
		<div class="login-content">
			<form action=""  method="post">
				<img src="assets/login-img/avatar.svg">
				<h2 class="title">Welcome</h2>
                <?php if(isset($error)){?>
	<font color="red">
  <?php echo $error; ?>
				</font>
<?php
} ?>
<br><br>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="email" class="input" name="email">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>
            	<input type="submit" class="btn" value="Login" name="btnlogin">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="assets/login-js/main.js"></script>
</body>
</html>
