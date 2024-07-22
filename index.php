<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (isset($_POST['submit'])) {
	$bottleid = $_POST['bottleid'];
	$userid = $_SESSION['wsmsuid'];
	$query = mysqli_query($con, "insert into tblcart(UserId,BottleId) values('$userid','$bottleid') ");
	if ($query) {
		echo "<script>alert('Product has been added in to the cart');</script>";
	} else {
		echo "<script>alert('Something went wrong.');</script>";
	}
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>WSMS-Home-Page</title>

	<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

	<div class="super_container">

		<div class="super_overlay"></div>

		<?php include_once('includes/header.php'); ?>
		<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="padding-top: 116px;">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/slide1.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="images/slide2.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="images/slide3.jpg" class="d-block w-100" alt="...">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
				data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
				data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>


		<!-- Featured -->

		<div class="featured">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container text-center">
							<div class="section_subtitle">the best deals</div>
							<div class="section_title">
								<h1>Water Bottle</h1>
							</div>
						</div>
					</div>
				</div>
				<!-- ... Existing HTML code ... -->
				
				


				<!-- ... Existing HTML code ... -->

			</div>
			<div class="row" style="margin-left:14%">
				<div class="col-12">
					<h4>Latest News</h4>
					<hr />
					<marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();">
						<?php
						$query = mysqli_query($con, "select * from tblnews");
						while ($row = mysqli_fetch_array($query)) {

							?>
							<p><a href="news-details.php?newsid=<?php echo $row['ID']; ?>">
									<?php echo $row['Title']; ?>
								</a></p>
						<?php } ?>
					</marquee>
				</div>
			</div>

		</div>



		<?php include_once('includes/footer.php'); ?>
	</div>

	<script src="js/jquery-3.3.1.min.js"></script>
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
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
	<script src="js/custom.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
		crossorigin="anonymous"></script>
</body>

</html>