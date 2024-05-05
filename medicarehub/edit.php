<?php
  require 'includes/config.php';

  $inquiry_ID="";
  $name="";
  $email="";
  $number="";
  $message="";
  $date="";

  if (!isset($_GET['inquiry_ID'])) {
    die("Error: inquiry_ID is not set in the URL.");
}
  $inquiry_ID = $_GET['inquiry_ID'];

  //read data from selected inquiry
  $sql = "SELECT * FROM inquiry WHERE inquiry_ID = $inquiry_ID";
  $result = $connection->query($sql);
  $row = $result->fetch_assoc();

  $name=$row["name"];
  $email=$row["email"];
  $number=$row["number"];
  $message=$row["message"];

  if(isset($_POST['btnUpdate'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    $sql = "UPDATE inquiry SET name = '$name', email = '$email', number = $number, message = '$message' WHERE inquiry_ID = $inquiry_ID";

    $result = mysqli_query($connection,$sql);
    if($result){
      header("location: /medicarehub/index.php");

    }else{
      die(mysqli_error($connection));
    }
  }

?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Policy And Pricing</title>
  <link rel="stylesheet" href="styles/edit.css">
  <link rel="stylesheet" href="styles/header-footer.css">
  <script src="https://kit.fontawesome.com/03308f9fa2.js" crossorigin="anonymous"></script>
</head>
<body>

  <!-------------------------------- Header ------------------------------>

  <section class="header">
    <nav>
      <a href=""><img src="images/logo.png" alt=""></a>
        <div class="nav-menu">
          <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">CLAIM</a></li>
            <li><a href="#">CONTACT</a></li>
            <li><a href="#">POLICY</a></li>
            <li><a href="#">FAQ</a></li>
          </ul>
        </div>
    </nav>

    <!-------------------------------- Policy Banner ------------------------------>

    <div class="policy-banner">
      <h1>Policy And Pricing</h1>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae dolores facilis dolorem ea praesentium porro, earum quaerat minima sint repellendus </p>
    </div>
  </section>

    <!-------------------------------- Side Navigation bar ------------------------------>

    <nav id="sideNav">
    <ul>
      <li><a href="#">My Profile</a></li>
      <li><a href="#">Coverage</a></li>
      <li><a href="#">Policy Documents</a></li>
      <li><a href="#">Payment History</a></li>
      <li><a href="index.php">Inquiry History</a></li>
      <li><a href="#">Settings</a></li>
    </ul>
  </nav>

  <img src="images/profile-pic.jpg" alt="menu" id="menuBtn">

  <!-------------------------------- Inquiries ------------------------------>

  <div class="inquiries-form">
    <div class="inquiries-left-col">
    <h2>Update your inquiry</h2>
    <form method="post">
      <input type="hidden" name = "inquiry_ID" value="<?php echo $inquiry_ID; ?>">
        <div class="row">
        <input type="text" required placeholder="First name" name="name" class="inquiry-form" value="<?php echo $name; ?>">
        </div>
        <div class="row">
        <input type="email" required placeholder="E-mail"  name="email" class="inquiry-form" value="<?php echo $email; ?>">
        </div>
        <div class="row">
        <input type="tel" required placeholder="Contact Number"  name="number" class="inquiry-form" value="<?php echo $number; ?>">
        </div>
        <div class="row">
        <input class="text-box" type="text" required placeholder="Enter your message"  name="message" class="inquiry-form" value="<?php echo $message; ?>">
        </div>
        <div class="btnRow">
          <button type="submit" class="btnUpdate" name="btnUpdate">Update</button>
          <a class="btnCancel" name="btnCancel" href="index.php" role="button">Cancel</a>
        </div>
    </form>
    </div>
  </div>

<!-------------------------------- Footer ------------------------------>
<section id="footer">
  <div class="container footer-row">
    <hr>
    <div class="footer-left-col">
      <div class="footer-links">
        <div class="link-title">
          <h4>Purchase</h4>
          <a href="policy.php"><small>Policy</small><br></a>
          <a href=""><small>Free trial</small></a>
        </div>
        <div class="link-title">
          <h4>About us</h4>
          <a href=""><small>Our Blog</small><br></a>
          <a href=""><small>FAQs</small></a>
        </div>
        <div class="link-title">
          <h4>Get in touch</h4>
          <a href="index.php"><small>Inquiries</small><br></a>
          <a href=""><small>Contact us</small></a>
        </div>
        <div class="link-title">
          <h4>Explore</h4>
          <a href=""><small>Find a nonprofit</small></a><br>
          <a href=""><small>Co-operate solution</small></a>
        </div>
      </div>
    </div>
    <div class="footer-right-col">
      <div class="footer-info">
        <div class="copyright-text">
          <a href=""><small>info@medicarehub.com</small></a><br>
        </div>
        <div class="footer-logo">
          <a href=""><img src="images/logo.png" alt="logo"></a>
        </div>     
      </div>
      </div>
    </div>
  </div>
</section>

<!-- ----social-icons---- -->
</div>
    <div class="footer-icons">
    <a href=""><i class="fa-brands fa-facebook"></i></a>
    <a href=""><i class="fa-brands fa-twitter"></i></a>
    <a href=""><i class="fa-brands fa-linkedin"></i></a>
  </div>

  <div class="footer-copyright">
    
    <p><i class="fa-regular fa-copyright"></i>Copyright 2024 MLB_WD_03.02_03</p>
  </div>

  <script src="scripts/sideNav.js"></script>
</body>
</html>