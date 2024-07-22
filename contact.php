<?php
session_start();
error_reporting(0);

include ('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>WSMS-Contact Us Page</title>

	<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/contact.css">
	<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
	<link rel="stylesheet" href="styles\main_styles.css">
</head>

<body>

	<div class="super_container">
		<div class="super_overlay"></div>

		<?php include_once ('includes/header.php'); ?>
		<!-- Home -->

		<div class="home">
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/wsms2.jpg"
				data-speed="0.8"></div>

		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">the best deals of water</div>
						<div class="section_title">
							<h1>Get in touch</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="row contact_row">

				<!-- Contact - About -->
				<div class="col-lg-4 contact_col">
					<div class="logo"><a href="index.php">WATER<span>BOAT</span></a></div>
					<div class="contact_text">
						<?php
						$query = mysqli_query($con, "select * from  tblpage where PageType='aboutus'");
						while ($row = mysqli_fetch_array($query)) {


							?>
							<p>
								<?php echo $row['PageDescription']; ?>
							</p>
						<?php } ?>
					</div>
				</div>

				<!-- Contact - Info -->
				<div class="col-lg-4 contact_col">
					<?php
					$query = mysqli_query($con, "select * from  tblpage where PageType='contactus'");
					while ($row = mysqli_fetch_array($query)) {


						?>
						<div class="contact_info">
							<ul>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="d-flex flex-column align-items-center justify-content-center">
										<div><img src="images/placeholder_2.svg" alt=""></div>
									</div>
									<span>
										<?php echo $row['PageDescription']; ?>
									</span>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="d-flex flex-column align-items-center justify-content-center">
										<div><img src="images/phone-call-2.svg" alt=""></div>
									</div>
									<span>
										<?php echo $row['Email']; ?>
									</span>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="d-flex flex-column align-items-center justify-content-center">
										<div><img src="images/envelope-2.svg" alt=""></div>
									</div>
									<span>
										<?php echo $row['MobileNumber']; ?>
									</span>
								</li>
							</ul>
						</div>
					<?php } ?>
				</div>

				<!-- Contact - Image -->
				<div class="col-lg-4 contact_col">
					<div class="contact_image d-flex flex-column align-items-center justify-content-center">
						<img src="images/contactwsms.jpg" alt="">
					</div>
				</div>

			</div>

		</div>
	</div>


	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
	<!-- Footer -->
	<footer class="text-center text-lg-start text-white container-foot" style="background-color: #3a4652">
		<!-- Section: Social media -->

		<!-- Section: Social media -->

		<!-- Section: Links  -->

		<!-- Section: Links  -->

		<!-- Copyright -->
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
			© 2024 oceanenterprise
		</div>
		<!-- Copyright -->
	</footer>
	<!-- Footer -->
	</div>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="styles/bootstrap-4.1.2/popper.js"></script>
	<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
	<script src="plugins/greensock/TweenMax.min.js"></script>
	<script src="plugins/greensock/TimelineMax.min.js"></script>
	<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="plugins/greensock/animation.gsap.min.js"></script>
	<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/progressbar/progressbar.min.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
	<script src="js/contact.js"></script>
</body>

</html>