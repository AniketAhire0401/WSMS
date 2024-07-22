<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login']))
  {
    $adminuser=$_POST['username'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tbladmin where  UserName='$adminuser' && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['wsmsaid']=$ret['ID'];
     header('location:dashboard.php');
    }
    else{
    $msg="Invalid Details.";
    }
  }
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Water Supply Management System | Sign In</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body bgcolor="#e4efe9">
	<div class="main-wthree" style="background-color:#e4efe9">
	<div class="container">
	<div class="sin-w3-agile">
		<h1 style="font-weight:bold; position:relative; left:229px;">Sign In</h1 >
		<form action="#" method="post">
			<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
			<div class="username" style="margin-top:6%;">
				<span class="username" >Username:</span>
				<input type="text" name="username" class="name" placeholder="Username" required="true">
				<div class="clearfix"></div>
			</div>
			<div class="password-agileits"  style="margin-top:6%;">
				<span class="username">Password:</span>
				<input type="password" name="password" class="password" placeholder="Password" required="true">
				<div class="clearfix"></div>
			</div>
			<div class="rem-for-agile"  >
				
				<a style="color:blue;" href="forgot-password.php">Forgot Password ?</a><br>
			</div>
			<div class="login-w3">
					<input type="submit" class="login" name="login" value="Sign In">
			</div>
			<div class="clearfix"></div>
		</form>
				<div class="back">
					<a href="../index.php" style="color: black">Back to home</a>
				</div>
				<?php include_once('includes/footer.php');?>

	</div>
	</div>
	</div>
</body>
</html>