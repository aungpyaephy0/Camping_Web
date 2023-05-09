<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
<nav class="navbar">
    <div class="content">
      
<div class="logo"><img src="images/logo.svg" alt=""><a href="">GWSC </a></div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="display.php">Home</a></li>
        <li><a href="Information.php">Information</a></li>
        <li><a href="Contact Us.php">Contact</a></li>
        <li><a href="AllFacilitiesList.php">Services</a></li>
        <li><a href="user_reg.php">Register</a></li>
       
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
  <div class="banner">

  </div>
  <div class="contact-section">
            <h2>How can we hlep?</h2>
            <div class="border"></div>
        </div>
  <section class="about" id="about">
    <div class="row">
      <div class="video-container">
        <h2>Feel free to write on info@camp.com</h2>
        <br>
        <h4>
        Our mission is to make it easy to find and book the UK's best camping, glamping and touring holidays.
</h4>
        <p>Reception phone: +64 (0)50 745 6473 Reservations: +27 (0)13 735 4265 Lodge: + 51 (0)13 735 4265 Emergencies:
          + 235 62 182 0374
          <br>
        <p>
          <a href="">Email: info@camp.com</a>
        </p>
        <br>
        <p> Social/follow:
        </p>
 
      </div>
      <?php
      include("connect.php");
      if (!isset($_POST['btnSubmit'])) {
        ?>
        <div class="content">
          <form action="Contact Us.php" method="POST" class="contact-form">
            <input type="text" name="txtUserName" class="contact-form-text" placeholder="Your name">
            <input type="email" name="txtEmail" class="contact-form-text" placeholder="Your Email">
            <input type="text" name="txtPhone" class="contact-form-text" placeholder="Your phone">
            <textarea name="txtMessage" class="contact-form-text" placeholder="Your message"></textarea>
            <input type="submit" name="btnSubmit" class="contact-form-btn" value="Send">
          </form>
        </div>
      </div>
    </section>
  <?php
      } else {
        $UserName = mysqli_real_escape_string($connect, $_POST['txtUserName']);
        $email = mysqli_real_escape_string($connect, $_POST['txtEmail']);
        $Phone = mysqli_real_escape_string($connect, $_POST['txtPhone']);
        $Message = mysqli_real_escape_string($connect, $_POST['txtMessage']);
        $sql = "select * from contact where UserName='" . $UserName . "'";

        $result = mysqli_query($connect, $sql);
        $no_of_row = mysqli_num_rows($result);

        if ($no_of_row == 0) {
          $sql = "insert into contact (UserName, Email, Phone, Message) values ('$UserName','$email','$Phone','$Message')";

          if (mysqli_query($connect, $sql)) {

            echo "<script>alert('Thanks For Your Connect With Us!');</script>";
            echo "<script>window.location='Contact Us.php';</script>";
          } else
            echo "<script>.alert(' Error!');</script>";
        } else {
          //     echo "<script>alert('Your username is already exist. Please change another username.');</script>";
          //    echo "<script>window.location='user_reg.php';</script>";
        }

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