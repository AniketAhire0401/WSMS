<?php
session_start();
error_reporting(0);
include ('includes/dbconnection.php');

if (isset($_POST['login'])) {
	$emailcon = $_POST['emailcont'];
	$password = md5($_POST['password']);
	$query = mysqli_query($con, "select ID from tbluser where  (Email='$emailcon' || MobileNo='$emailcon') && Password='$password' ");
	$ret = mysqli_fetch_array($query);
	if ($ret > 0) {
		$_SESSION['wsmsuid'] = $ret['ID'];
		$_SESSION['login_success'] = true;
		header('location:index.php');
		exit; // Add this line to stop further execution
	} else {
		$msg = "Invalid Details.";
	}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>WSMS-Signin Page</title>

	<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- <link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css"> -->
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

	<style>
		body {
			background-image: url("https://images.unsplash.com/photo-1471286274405-579f8d7132d8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D");
			object-fit: cover;
		}
	</style>

	<script>


		<?php
		session_start();

		if (isset($_SESSION['login_success']) && $_SESSION['login_success']) {
			echo "alert('Login successful!');";
			unset($_SESSION['login_success']); // Reset the session variable
		}
		?>

		function redirectToHomePage() {
			window.location.href = 'index.php'; // Update with the correct home page URL
		}


	</script>
</head>



<body>
	<div class="outer-div_signin">
		<div class="inner-div">
			<!-- <div class="home_button">
				<button onclick="redirectToHomePage()" class="btn btn-primary">Home</button>
			</div> -->
			<div class="contact">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="section_title_container text-center">
								<div class="section_subtitle">Water Boat</div>
								<div class="section_title">
									<h1 style="margin-top:4%">Sign In</h1>
								</div>
							</div>
						</div>
					</div>
					<div class="row contact_form_row">
						<div class="col">
							<div class="contact_form_container">
								<form action="#" class="contact_form text-center" id="contact_form" method="post"
									name="signup">
									<p style="font-size:16px; color:red" align="center">
										<?php if ($msg) {
											echo $msg;
										} ?>
									</p>
									<div class="row" style="margin-top:4%">
										<div class="col-lg-12">
											<input type="text" class="form-control"
												placeholder="Registered Email or Contact Number" name="emailcont"
												id="email" required="true">
										</div>
									</div>
									<div class="row" style="margin-top:4%">
										<div class="col-lg-12">
											<input type="password" class="form-control" placeholder="Password"
												id="password" name="password" required="true">
										</div>
										<a href="forgot-password.php" style="margin-left:2%; margin-top:1%">Forgot
											Password?</a>
									</div>
									<button class="contact_button btn btn-success" style="margin-top:4%" type="submit"
										name="login">Login</button>
									<div class="row m-t-50">
										<div class="col-sm-12 text-center" style="margin-top:4%">
											<p class="text-muted">Don't have an account? <a href="signup.php"
													class="text-dark m-l-5"><b>Sign Up</b></a></p>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap JS (jQuery is required) -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!-- Your custom JavaScript -->
	<script>
		function redirectToHomePage() {
			// Replace 'index.php' with your home page URL
			window.location.href = 'index.php';
		}
	</script>
</body>

</html>