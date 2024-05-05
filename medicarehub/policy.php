<?php
//connection file
require 'includes/config.php';

//intializing variables
  $name="";
  $email="";
  $number="";
  $message="";

  //check whether the submit button clicked
  if(isset($_POST['btnSubmit'])){

    $name=$_POST["name"];
    $email=$_POST["email"];
    $number=$_POST["number"];
    $message=$_POST["message"];

    //inserting data
    $sql = "INSERT INTO inquiry (name, email, number, message)" . "VALUES('$name','$email','$number','$message')";

    $result = $connection->query($sql);
    if($result){
      header("location: /medicarehub/policy.php");
    }else{
      echo"Error!: ".$connection->error;
    }

  }
  //closing connection
  $connection->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Policy And Pricing</title>
  <link rel="stylesheet" href="styles/policy.css">
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
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex fugit pariatur quibusdam, odit minima quas accusamus et dolorum delectus dolorem id molestiae deserunt enim dolor, natus quaerat quisquam eveniet nesciunt.</p>
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
  

<!-------------------------------- Price-Cards ------------------------------>
    <div class="price-cards">
      <div class="card-price">
        <a href="#"><h3>MEDI-PLUS</h3>
          <h2>$49</h2>
        <p>per user/per month</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum nostrum dicta eum repudiandae itaque molestiae!</p>
        </a>
      </div>
      <div class="card-price">
        <a href="#">
          <h3>HEALTH-PLUS</h3>
        <h2>$75</h2>
        <p>per user/per month</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum nostrum dicta eum repudiandae itaque molestiae!</p>
        </a>
      </div>
      <div class="card-price">
        <a href="#"><h3>MEDI-60</h3>
          <h2>$99</h2>
          <p>per user/per month</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum nostrum dicta eum repudiandae itaque molestiae!</p>
        </a>
      </div>
    </div>

  <!-------------------------------- Inquiries ------------------------------>

  <div class="inquiries-form">
    <div class="inquiries-left-col">
    <h2>Inquiries!</h2>
    <form method="post">
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
          <a class="btnEdit" name="btnEdit" href="index.php" role="button">Edit</a>
          <button type="submit" class="btnSubmit" name="btnSubmit">Submit</button>
        </div>
    </form>
    </div>
    <div class="inquiries-right-col">
      <img src="images/contact.jpg" alt="">
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