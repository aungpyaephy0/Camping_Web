<html>
<head>
    <title></title>
   
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" href="style2.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<nav class="navbar">
    <div class="content">
      <div class="logo"><a href="#">CodingNepal</a></div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="Display.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="AllFacilitiesList.php">Features</a></li>
        <li><a href="Contact Us.php">Contact</a></li>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
  <div class="banner-register">
        
    </div>
    <div class="contact-section">
        <h2>Register Form</h2>
        <div class="border"></div>
    </div>
    <?php 
    include("connect.php");
    if(!isset($_POST['btnregister'])){
?>
    <div class="content">
      <form action="user_reg.php" method="POST" class="register-form">
        <input type="text" name="txtfname" class="contact-form-text" placeholder="First name">
        <input type="text" name="txtsname"  class="contact-form-text" placeholder="Second name">
        <input type="text" name="txtUserName" class="contact-form-text" placeholder="User name">
        <input type="email"  name="txtemail" class="contact-form-text" placeholder=" Email">
        <input type="password" name="txtpassword" class="contact-form-text" placeholder="Password">
        <input type="submit" name="btnregister"class="register-form-btn" value="Submit">
        <input type="reset" name="reset" value="Clear"/> 
         
    <form id="comment_form" action="recaptcha.php" method="post">
     <div class="g-recaptcha" data-sitekey="6LcxtZIjAAAAAEw_lBkQC1yJ14VtIdHYY5o8xm0U"></div>     

    </div>

    <?php
        }
        else{
                $fname=mysqli_real_escape_string($connect,$_POST['txtfname']);
                $sname=mysqli_real_escape_string($connect,$_POST['txtsname']);
                $email=mysqli_real_escape_string($connect,$_POST['txtemail']);
                $username=mysqli_real_escape_string($connect,$_POST['txtUserName']);
                $password=mysqli_real_escape_string($connect,$_POST['txtpassword']);
             $sql="select * from visitor where UserName='".$username."'";

                $result=mysqli_query($connect,$sql);
                $no_of_row = mysqli_num_rows($result);

                if($no_of_row==0){
                $sql="insert into visitor (FirstName, LastName,UserName,Email,password) values ('$fname','$sname','$username','$email','$password')";

                if(mysqli_query($connect,$sql)) {

                 echo "<script>alert('Successfully registered!');</script>";
                 echo "<script>window.location='Login.php';</script>";
                 } 
                 else echo "<script>.alert('Registeration Error!');</script>";
            }
                else {
                    echo "<script>alert('Your username is already exist. Please change another username.');</script>";
                   echo "<script>window.location='user_reg.php';</script>";
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
                    <a href="mailto:contact@rcc.com" target="_blank" class="footer-category-item hover-underline-animation">Email Us</a><br>
                    <a href="" class="footer-category-item hover-underline-animation">Live Chat</a><br>

                </div>
            </div>
            <div>
                <h6 class="footer-category">Social</h6>
                <div>
                    <a href="https://www.facebook.com/" target="_blank" class="footer-category-item hover-underline-animation">Facebook</a><br>
                    <a href="https://www.instagram.com/" target="_blank" class="footer-category-item hover-underline-animation">Instagram</a><br>
                    <a href="https://twitter.com/" target="_blank" class="footer-category-item hover-underline-animation">Twitter</a><br>
                </div>
            </div>
        </div>
        <div class="notice">
            <p>&copy; Copyright 2022, Camping Company</p>
        </div>
    </footer>
</body>
</html>