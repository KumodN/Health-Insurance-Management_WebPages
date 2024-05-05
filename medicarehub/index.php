<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inquiries</title>
  <link rel="stylesheet" type="text/css" href="styles/index.css">
  <link rel="stylesheet" href="styles/header-footer.css">
  <script src="https://kit.fontawesome.com/03308f9fa2.js" crossorigin="anonymous"></script>
</head>
<body>

  <!-- ------------------Header------------------------ -->
  <section class="header">
    <nav>
      <a href=""><img src="images/logo.png" alt=""></a>
        <div class="nav-menu">
          <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">CLAIM</a></li>
            <li><a href="#">CONTACT</a></li>
            <li><a href="policy.php">POLICY</a></li>
            <li><a href="#">FAQ</a></li>
          </ul>
        </div>
    </nav>
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

<!-- ------------------Inquiry List------------------------ -->
  <div class="container">
    <h2>List of inquiries</h2>
    <a href="policy.php" class="btnNewinquiry" role = "button">New Inquiry</a>
    <br>
    <table class= "table"> 
      <thead>
        <tr>
          <th>Inquiry ID</th>
          <th>Name</th>
          <th>e-mail</th>
          <th>Phone Number</th>
          <th>Message</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>

        <?php
          require 'includes/config.php';
          function readData()
          {
            global $connection;

            //read all rows from database table
          $sql = "SELECT * FROM inquiry";
          $result = $connection->query($sql);

          //check query execute correctly
          if($result->num_rows>0){

            //read data of each row
          while($row = $result->fetch_assoc()){
                  echo "
                  <tr>
                  <td>$row[inquiry_ID]</td>
                  <td>$row[name]</td>
                  <td>$row[email]</td>
                  <td>$row[number]</td>
                  <td>$row[message]</td>
                  <td>$row[date]</td>
                  <td>
          <button><a class='btnEdit' href='edit.php?inquiry_ID=".$row['inquiry_ID']."'>Edit</a></button>
          <button><a class='btnDelete' href='includes/delete.php?inquiry_ID=".$row['inquiry_ID']."'>Delete</a></button>
        </td>
                </tr>
                  ";
          }
          }
          else{
            die("Invalid query: " . $connection->error);
          }
          //closing the connection
          $connection->close();
          }
          readData();
        ?>
      </tbody>
    </table>
  </div>

  <!-- ------------------Footer------------------------ -->

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