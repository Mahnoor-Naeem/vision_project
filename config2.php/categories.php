
<?php require 'config.php'?>
<?php
// $id = $_GET['id'];
$id = 8;

    $query = "SELECT * FROM shops WHERE cat_id = '$id'";
    $result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Business Group a Corporate Category Bootstrap responsive Website Template | Portfolio :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Business Group a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<link href="css/jQuery.lightninBox.css" rel="stylesheet" type="text/css" media="all" /><!-- for portfolio lightninBox css -->

<!-- default css files -->
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/detail.css" type="text/css" media="all" />

	<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- default css files -->
	
<!--web font-->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!--//web font-->
      
<style>
.com-foot-name{
    display: flex;
    justify-content: space-between;
}
</style>
</head>

<!-- Body -->
<body>

<!-- banner -->
	
	<!-- //banner -->

	<!-- Portfolio section -->
<section class="portfolio-agileinfo" id="portfolio">
<!-- <h3>Portfolio</h3> -->
	<div class="container">
		<div class="gallery-grids">
			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<!-- <ul id="myTab" class="nav nav-tabs" role="tablist" data-aos="zoom-in">
					<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">All</a></li>
					<li role="presentation"><a href="#teach" role="tab" id="teach-tab" data-toggle="tab" aria-controls="teach">Projects</a></li>
					<li role="presentation"><a href="#train" role="tab" id="train-tab" data-toggle="tab" aria-controls="train">Business</a></li>
					<li role="presentation"><a href="#learn" role="tab" id="learn-tab" data-toggle="tab" aria-controls="learn">Grids</a></li>
					<li role="presentation"><a href="#award" role="tab" id="award-tab" data-toggle="tab" aria-controls="award">Design</a></li>
				</ul> -->
				<div id="myTabContent" class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
						<div class="tab_img">

							<?php foreach($result as $val) { ?>
							<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
								<a href="detail.php?id=<?php echo $val['shop_id'];?>">
									<img src="images/<?php echo $val['shop_img'];?>" class="img-responsive" alt="w3ls" />
									<div class="com-foot-name">
										<h4><?php echo $val['shop_name'];?></h4>
										<p><?php echo $val['shop_rating'];?> <i class="fa fa-star"></i></p>
									</div>
									
									<div class="b-wrapper">
										<i class="fa fa-search-plus" aria-hidden="true"></i>
										<h5>More Details</h5>
									</div>
								</a>
							</div>
							<?php } ?>

							<div class="clearfix"> </div>
						</div>
						
					</div>
				
				</div>
			</div>
		</div>	
	</div>	
</section>
<!-- /Portfolio section -->	

<!-- footer -->
<!-- <div class="footer">
	<div class="container">
		<div class="col-md-4 footerleft">
			<h3>Lorem ipsum</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
		incididunt ut labore dolore magna aliqua. Ut enim ad minim quis .</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
		incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
		</div>
		<div class="col-md-4 footermiddle">
			<h3>Get in touch</h3>
			<p>1572 km² London Borough of EalingCity</p>
			<p>London,No 008921</p>
			<p class="phone">phone: +0(21) 334 5678</p>
			<p class="phone">Fax: +0(21) 334 5678</p>
			<p class="phone">Mail: <a href="mailto:info@example.com">info@example.com</a></p>
		</div>
		<div class="col-md-4 footerright">
			<h3>Twitter feed</h3>
			<ul class="w3agile_footer_grid_list">
				<li>Ut aut reiciendis voluptatibus adipiscing <a href="#">example.com</a> alias, ut aut.
				<span><i class="fa fa-twitter" aria-hidden="true"></i> 02 days ago</span></li>
				<li>Itaque earum rerum hic tenetur a sapiente <a href="#">example.com</a> ut aut.
				<span><i class="fa fa-twitter" aria-hidden="true"></i> 03 days ago</span></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
</div> -->
<!-- //footer -->

<!-- copyright -->
<!-- <div class="wthree_copy_right">
	<div class="container">
		<p>© 2017 Business group. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			
	</div>
</div> -->
<!-- //copyright -->

<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- //Default-JavaScript-File -->
	
<!-- js for portfolio lightbox -->
<script src="js/jQuery.lightninBox.js"></script>
<script type="text/javascript">
	$(".lightninBox").lightninBox();
</script>
<!-- /js for portfolio lightbox -->

<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->

	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

</body>
<!-- //Body -->
</html>