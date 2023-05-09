
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Facilities</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    

<nav class="navbar">
    <div class="content">
      <div class="logo"><a href="#">GWSC</a></div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="display.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Features</a></li>
        <li><a href="user_reg.php">Contact</a></li>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
 <div class="facilities-banner"></div>
 <div class="contact-section">
        <h2>Services From Us </h2>
        <div class="border"></div>
    </div>
  <?php
  include('connect.php');
  $facilities = "SELECT facilities.*
  FROM facilities ";
  $facilities_result = mysqli_query($connect, $facilities); ?>
  <div class="facilities-container">
  <?php 
  foreach ($facilities_result as $row) {
    ?>
      <div >
        <?php
        echo "<img class='facilities-item' src='images/" . $row['Facilities_Icon'] . "'>";
        echo "<p> " . $row['Faclities_Name'] . " </p> <br>" ;
        ?>

      </div>
   
    <?php
  }
  ?>
<footer class="grid-container-3">
    <div class="container">
      <div>
        <h6 class="footer-category">Information</h6>
        <div>
          <a href="" class="footer-category-item hover-underline-animation">Camp and Hike</a><br>
          <a href="" class="footer-category-item hover-underline-animation">Climbing</a><br>
          <a href="" class="footer-category-item hover-underline-animation">Footwear</a><br>

        </div>
      </div>
      <div>
        <h6 class="footer-category">Company</h6>
        <div>
          <a href="" class="footer-category-item hover-underline-animation">About</a><br>
          <a href="" class="footer-category-item hover-underline-animation">Blog</a><br>
          <a href="" class="footer-category-item hover-underline-animation">Events</a><br>
          <a href="" class="footer-category-item hover-underline-animation">Promos</a><br>

        </div>
      </div>
      <div>
        <h6 class="footer-category">Support</h6>
        <div>
          <a href="" class="footer-category-item hover-underline-animation">My Account</a><br>
          <a href="" class="footer-category-item hover-underline-animation">Returns</a><br>
          <a href="" class="footer-category-item hover-underline-animation">Payment Methods</a><br>
          <a href="" class="footer-category-item hover-underline-animation">FAQs</a><br>
        </div>
      </div>
      <div>
        <h6 class="footer-category">Contact</h6>
        <div>
          <a href="mailto:contact@rcc.com" target="_blank" class="footer-category-item hover-underline-animation">Email
            Us</a><br>
          <a href="" class="footer-category-item hover-underline-animation">Live Chat</a><br>

        </div>
      </div>
      <div>
        <h6 class="footer-category">Social</h6>
        <div>
          <a href="https://www.facebook.com/" target="_blank"
            class="footer-category-item hover-underline-animation">Facebook</a><br>
          <a href="https://www.instagram.com/" target="_blank"
            class="footer-category-item hover-underline-animation">Instagram</a><br>
          <a href="https://twitter.com/" target="_blank"
            class="footer-category-item hover-underline-animation">Twitter</a><br>
        </div>
      </div>
    </div>
    <div class="notice">
      <p>&copy; Copyright 2022, Camping Company</p>
    </div>
  </footer>  
</body>
</html>