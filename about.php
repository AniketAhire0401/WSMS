<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>WSMS-About us</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="myHOME - real estate template project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
	<!-- <link rel="stylesheet" type="text/css" href="styles/about.css">
	<link rel="stylesheet" type="text/css" href="styles/about_responsive.css"> -->
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

	<div class="super_container">
		<?php include_once('includes/header.php'); ?>
		<!-- <div class="super_overlay"></div>

		

		<div class="home">
			<div class="parallax_background parallax-window" data-parallax="scroll"
				data-image-src="images/wsmsabout1.jpg" data-speed="0.8"></div> 
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">About us</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->

		<!-- Intro -->

		<div class="intro" style="padding-top:145px;">
			<div class="container">
				<div class="row row-eq-height">

					<!-- Intro Content -->
					<div class="col-lg-6">
						<?php
						$query = mysqli_query($con, "select * from  tblpage where PageType='aboutus'");
						while ($row = mysqli_fetch_array($query)) {


							?>
							<div class="intro_content">
								<div class="section_title_container" style="top:65px; left:82px;">
									<div class="section_subtitle">
										<?php echo $row['PageTitle']; ?>
									</div>
									<div class="section_title">
										<h1>Water Boat</h1>
										<p style="font-size:20px; color:cadetblue;">First exclusive product in packaged drinking water.<br>Designed by Engineers and organized by MBAs with a mission of
										"Right Product to the right Customer, at Right Time"
										</p>
										<br><br><br><br><br><br><br>
									</div>
								</div>

							</div>
						<?php } ?>
					</div>

					<!-- Intro Image -->
					<div class="col-lg-6 intro_col">
						<div class="intro_image" style="left:211px;">
							<div class="background_image" style="background-image:url(images/slider-img.jpg)"></div>
							<img src="images/slider-img.jpg" alt="" height="330px" width="400px">
						</div>
					</div>

				</div>
			</div>
		</div>

		<?php include_once('includes/footer.php'); ?>

	</div>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="https://kit.fontawesome.com/d11042dc21.js" crossorigin="anonymous"></script>
	<script src="styles/bootstrap-4.1.2/popper.js"></script>
	<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
	<script src="plugins/greensock/TweenMax.min.js"></script>
	<script src="plugins/greensock/TimelineMax.min.js"></script>
	<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="plugins/greensock/animation.gsap.min.js"></script>
	<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
	<script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/progressbar/progressbar.min.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="js/about.js"></script>
</body>

</html>