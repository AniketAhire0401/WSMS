<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['wsmsaid']==0)) {
  header('location:logout.php');
  }
  else{

if(isset($_POST['submit']))
  {
    $aid=$_SESSION['wsmsaid'];
    $companyname=$_POST['compname'];
    $bottlesize=$_POST['bottlesize'];
    $price=$_POST['price'];
  
   $bimg=$_FILES["images"]["name"];
     $extension = substr($bimg,strlen($bimg)-4,strlen($bimg));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{
//r
$bottleimg=md5($bimg).$extension;
     move_uploaded_file($_FILES["images"]["tmp_name"],"images/".$bottleimg);
    $query=mysqli_query($con, "insert into tblwaterbottle(CompanyName,BottleSize,Price,Image) value('$companyname','$bottlesize','$price','$bottleimg')");
    if ($query) {
    $msg="Water Bottle details has been submitted.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  }

}
  ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Water Supply Management System | Add Bottle Detail</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
              <!--header start here-->
				<?php include_once('includes/header.php');?>
<!--heder end here-->
	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a><i class="fa fa-angle-right"></i>Add Water Bottle
            </ol>
		<!--grid-->
 	<div class="grid-form">
 


  <div class="grid-form1">
  	       <h3>Add Water Bottle</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" method="post"  enctype="multipart/form-data">
								 <p style="font-size:16px; color:red" align="left"> <?php if($msg){
    echo $msg;
  }  ?> </p>			
								<div class="form-group">
									<label for="smallinput" class="col-sm-2 control-label">Company Name</label>
									<div class="col-sm-8">
										<select class="col-sm-12" name="compname" id="compname" required="true">
                                <option value="">Choose Water Company</option>
                                <?php $query=mysqli_query($con,"select * from tblcompany");
              while($row=mysqli_fetch_array($query))
              {
              ?>    
              <option value="<?php echo $row['CompanyName'];?>"><?php echo $row['CompanyName'];?></option>
                  <?php } ?> 
                            </select>
									</div>
								</div>

<div class="form-group">
									<label for="mediuminput" class="col-sm-2 control-label">Bottle Size</label>
									<div class="col-sm-8">
										<select class="col-sm-12" name="bottlesize" id="bottlesize" required="true">
											<option value="">Choose Bottle Size</option>
											<option value="500 ml">500 ML</option>
											<option value="1 ltr">1 ltr</option>
											<option value="2 ltr">2 ltr</option>
                                             <option value="5 ltr">5 ltr</option>	
                                             <option value="10 ltr">10 ltr</option>
                                             <option value="20 ltr">20 ltr</option>
</select>
									</div>
								</div>
								<div class="form-group">
									<label for="mediuminput" class="col-sm-2 control-label">Price</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="price" id="price" value="" required='true'>
									</div>
								</div>

								<div class="form-group">
									<label for="mediuminput" class="col-sm-2 control-label">Image</label>
									<div class="col-sm-8">
										<input type="file" class="form-control1" name="images" id="images" value="" required='true'>
									</div>
								</div>
								
						
						</div>
					</div>

      <div class="panel-footer">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button class="btn-primary btn" type="submit" name="submit">Add</button>
				
			</div>
		</div>
	 </div>
    </form>
  </div>
 	</div>
 	<!--//grid-->

<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<?php include_once('includes/footer.php');?>
</div>
</div>
 <?php include_once('includes/sidebar.php');?>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>
<?php } ?>