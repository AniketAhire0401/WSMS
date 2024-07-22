<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    .submit1 {
      display: none;
    }

  </style>
</head>

<body>

  <?php
  // Check if logged in
  if (isset($_SESSION['login_success']) && $_SESSION['login_success'] === true) {
    // Print additional style to override previous one
    echo '<style>.submit1 {display: block !important;}</style>';
  }
  ?>
  <header class="header">

    <!-- Header Bar -->
    <div class="header_bar d-flex flex-row align-items-center justify-content-start">
      <div class="header_list">
        <?php
        $query = mysqli_query($con, "select * from  tblpage where PageType='contactus'");
        while ($row = mysqli_fetch_array($query)) {


          ?>
          <ul class="d-flex flex-row align-items-center justify-content-start">
            <!-- Phone -->
            <li class="d-flex flex-row align-items-center justify-content-start">
              <div><img src="images/phone-solid.svg" alt=""></div>
              <span>+91
                <?php echo $row['MobileNumber']; ?>
              </span>
            </li>
            <!-- Address -->
            <p>
              <li class="d-flex flex-row align-items-center justify-content-start">
                <div><img src="images/location-dot-solid.svg" alt=""></div>
                <span style="padding-top:15px;">
                  <?php echo $row['PageDescription']; ?>
                </span>
              </li>
            </p>
            <!-- Email -->
            <li class="d-flex flex-row align-items-center justify-content-start">
              <div><img src="images/envelope-solid.svg" alt=""></div>
              <span>
                <?php echo $row['Email']; ?>
              </span>
            </li>
          </ul>
        <?php } ?>

      </div>
      <div class="ml-auto d-flex flex-row align-items-center justify-content-start">
        <ul class="d-flex flex-row align-items-start justify-content-start">
          <?php if (strlen($_SESSION['wsmsuid'] == 0)) { ?>
            <li><a href="admin/index.php" style="color:#818FB4">Admin</a></li>
          <?php } ?>

        </ul>
        <div class="log_reg d-flex flex-row align-items-center justify-content-start">

          <ul class="d-flex flex-row align-items-start justify-content-start">
            <?php if (strlen($_SESSION['wsmsuid'] == 0)) { ?>
              <li><a style="color:#818FB4" href="signin.php">Login</a></li>
              <li><a style="color:#818FB4" href="signup.php">Register</a></li>
            <?php } ?>
          </ul>

        </div>
      </div>
    </div>
    <hr style="margin:0rem;">

    <!-- Header Content -->
    <div class="header_content d-flex flex-row align-items-center justify-content-start">
      <div class="logo"><a href="index.php"><span><img src="images/logo.png" height="58px" alt="logo"></span></a></div>
      <nav class="main_nav">
        <ul class="container-head d-flex flex-row align-items-start justify-content-start">
          <div class="home">
            <li><a href="index.php">Home</a></li>

          </div>

          <div class="about">
            <li><a href="about.php">About us</a></li>

          </div>

          <div class="page-detail">
            <li><a href="detailed-page.php">Water Bottle</a></li>
          </div>


          <div class="cart">
            <li><a href="cart.php">My Cart</a></li>

          </div>

          <div class="order">
            <li><a href="my-order.php">My Order</a></li>

          </div>
          <div class="contact-page">
            <li><a href="contact.php">Contact</a></li>

          </div>


        </ul>
      </nav>
      <div class="submit1 ml-auto btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" style="
  background: #3a4652;"> My Account</div>
      <ul class="dropdown-menu"
        style="text-align: center; position: absolute; transform: translate3d(1256px, 60px, 0px);">
        <li><a href="profile.php">My Profile</a></li>

        <li><a href="cart.php">My Cart</a></li>
        <li><a href="my-order.php">My Order</a></li>

        <li><a href="change-password.php">Change Password</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>




  </header>
</body>

</html>