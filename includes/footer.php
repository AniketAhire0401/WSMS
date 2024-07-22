<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<style>
		@media (max-width:390px) {
			.foot-social {
				flex-direction: row;
			}
		}
	</style>
</head>

<body>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
	<!-- Footer -->
	<footer class="text-center text-lg-start text-white container-foot" style="background-color: #3a4652">
		<!-- Section: Social media -->
		<!-- <section class="d-flex justify-content-between p-4 " style="background-color: #01060a"> -->
		<!-- Left -->
		<!-- <div class="me-5">
			<span>Get connected with us on social networks:</span>
		</div> -->
		<!-- Left -->
		<!-- Right -->
		<div class="foot-social">
			<div class="facebook">
				<a href="" class="text-white me-4">
					<i class="fab fa-facebook-f"></i>
				</a>
			</div>

			<div class="instagram">
				<a href="" class="text-white me-4">
					<i class="fab fa-instagram"></i>
				</a>
			</div>

			<div class="google">
				<a href="" class="text-white me-4">
					<i class="fab fa-google"></i>
				</a>
			</div>

			<div class="linkedin">
				<a href="" class="text-white me-4">
					<i class="fab fa-linkedin"></i>
				</a>
			</div>



		</div>
		<!-- Right -->
		<!-- Section: Social media -->

		<!-- Section: Links  -->
		<section class="" style="background:#3a4652;">
			<div class="container text-center text-md-start mt-5">
				<!-- Grid row -->
				<div class="row mt-3">
					<!-- Grid column -->
					<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
						<!-- Content -->
						<h6 class="text-uppercase fw-bold"><img src="images/logo.png" height="58px" alt="logo"></h6>
						<hr class="mb-4 mt-0 d-inline-block mx-auto"
							style="width: 60px; background-color: #7c4dff; height: 2px" />
						<p>
							We provide services all over Nashik city.
							Our water is processed with RO, UV and ozonization system.
							The company is certified ISI standards system.
						</p>
					</div>
					<!-- Grid column -->

					<!-- Grid column -->
					<!-- <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4"> -->
					<!-- Links -->
					<!-- <h6 class="text-uppercase fw-bold">Products</h6>
					<hr class="mb-4 mt-0 d-inline-block mx-auto"
						style="width: 60px; background-color: #7c4dff; height: 2px" />
					<p>
						<a href="#!" class="text-white">MDBootstrap</a>
					</p>
					<p>
						<a href="#!" class="text-white">MDWordPress</a>
					</p>
					<p>
						<a href="#!" class="text-white">BrandFlow</a>
					</p>
					<p>
						<a href="#!" class="text-white">Bootstrap Angular</a>
					</p> -->
					<!-- </div> -->
					<!-- Grid column -->

					<!-- Grid column -->
					<div class="col-md-3 col-lg-2 col-xl-2 ms-auto mb-2">
						<!-- Links -->
						<h6 class="text-uppercase fw-bold">Useful links</h6>
						<hr class="mb-4 mt-0 d-inline-block ms-auto"
							style="width: 60px; background-color: #7c4dff; height: 2px" />
						<p>
							<a href="about.php" class="text-white">About</a>
						</p>
						<p>
							<a href="news-details.php" class="text-white">News</a>
						</p>
						<p>
							<a href="contact.php" class="text-white">Contact Us</a>
						</p>

					</div>
					<!-- Grid column -->

					<!-- Grid column -->
					<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
						<?php
						$query = mysqli_query($con, "select * from  tblpage where PageType='contactus'");
						while ($row = mysqli_fetch_array($query)) {


							?>
							<!-- Links -->
							<h6 class="text-uppercase fw-bold">Contact</h6>
							<hr class="mb-4 mt-0 d-inline-block mx-auto"
								style="width: 60px; background-color: #7c4dff; height: 2px" />
							<p><i class="fas fa-home mr-3"></i>B6, Atharva Pushp, Sharayu Park,<br> Nashik, Maharashtra
								422003
								India</p>
							<p><i class="fas fa-envelope mr-3"></i>
								<?php echo $row['Email']; ?>
							</p>
							<p><i class="fas fa-phone mr-3"></i>
								<?php echo $row['MobileNumber']; ?>
							</p>
						<?php } ?>
					</div>
					<!-- Grid column -->
				</div>
				<!-- Grid row -->
			</div>
		</section>
		<!-- Section: Links  -->

		<!-- Copyright -->
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
			© 2024 oceanenterprise
		</div>
		<!-- Copyright -->
	</footer>
	<!-- Footer -->
</body>

</html>