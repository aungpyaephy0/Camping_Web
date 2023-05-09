<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Information</title>

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
    <?php
    include("connect.php");
    if (isset($_SESSION['UserName'])) {
        $UserName = $_SESSION['UserName'];

        $sql = "select * from campsite";

        $result = mysqli_query($connect, $sql);

        $no_of_row = mysqli_num_rows($result);
        ?>

        <div class="banner">

        </div>
        <div class="abt">
            <div class="content">
                <div class="title">
                    <?php echo "<b>Valid User:</b> " . $UserName . "<br>"; ?>
                </div>

                <br><br>
                <div class="search">
                    <form action="search.php" method="POST" enctype="multipart/form-data">

                        <input type="text" name="Region" placeholder="Search Region">
                        <br><br>
                        <input type="submit" class="btn" name="submit" value="Search" class="button">

                        <input type="reset" class="btn" name="clear" value="Clear" class="button">
                </div>
            </div>
        </div>

        <br><br>
        </section>
        <script>
            const body = document.querySelector("body");
            const navbar = document.querySelector(".navbar");
            const menu = document.querySelector(".menu-list");
            const menuBtn = document.querySelector(".menu-btn");
            const cancelBtn = document.querySelector(".cancel-btn");
            menuBtn.onclick = () => {
                menu.classList.add("active");
                menuBtn.classList.add("hide");
                cancelBtn.classList.add("show");
                body.classList.add("disabledScroll");
            }
            cancelBtn.onclick = () => {
                menu.classList.remove("active");
                menuBtn.classList.remove("hide");
                cancelBtn.classList.remove("show");
                body.classList.remove("disabledScroll");
            }

            window.onscroll = () => {
                this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
            }
        </script>

        <div class="contact-section">
            <h2>Campsites & Swimming pools </h2>
            <div class="border"></div>
        </div>
        <?php

        for ($i = 0; $i < $no_of_row; $i++) {
            $row = mysqli_fetch_array($result);
            $Site_ID = $row['Site_ID'];
            ?>

            <div class="review-side">
                <div class="review-side-box1">
                    <?php echo "<img width='400px'height='300px' src='" . $row['Site_Image'] . "'><br>"; ?>
                    <?php ?>
                </div>
                <div class="review-side-message">
                    <?php
                    echo "<p>" . $row['Short_Desc'] . "</p><br>";
                    echo "<p> Rating: " . $row['Rating'] . " </p><br>";
                    echo "<a href='detail.php?id=" . $Site_ID . "' class = 'btn'> Detail </a><br>";

                    ?>
                </div>
            </div>
        <?php }


    } else {
        echo "Please login at first!";
    }

    ?>



    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else if (isset($_POST['submit'])) {

        $Visitor_ID = $_SESSION['VisitorID'];
        $Site_ID = $_POST['Site_ID'];
        $Message = $_POST['txtMessage'];
        $id = $Site_ID;
        $insert_review = "INSERT INTO reviewer (Site_ID,Visitor_ID,Message) 
        VALUES ('$Site_ID', '$Visitor_ID','$Message')";
        $query = mysqli_query($connect, $insert_review);
        if ($query) {
            # code...
            //   echo "<script>window.location = 'detail.php/?id='".$Site_ID."</script>";
            //   echo "<script>alert('Successfully saved!');</script>";	
    
        }

        $review_result = "SELECT campsite.CampSite_Name,visitor.UserName,reviewer.Message
  FROM campsite,visitor,reviewer 
  WHERE campsite.Site_ID = reviewer.Site_ID 
  AND visitor.Visitor_ID = reviewer.Visitor_ID 
  AND reviewer.Site_ID ='" . $id . "' ";

        $review_result = mysqli_query($connect, $review_result);

        $no_of_row = mysqli_num_rows($review_result);
        for ($i = 0; $i < $no_of_row; $i++) {
            $row = mysqli_fetch_array($review_result); ?>

                <div class="review-side">
                    <div class="review-side-box1">
                    <?php echo "<p><b> User Name: </b>" . $row['UserName'] . " </p>";
                    echo "<p><b>Camp Site Name: </b> " . $row['CampSite_Name'] . "</p>"; ?>
                    </div>
                    <div class="review-side-message">
                        <?php
                        echo "<p><b>Feed Back: </b>" . $row['Message'] . " </p>";

                        ?>
                    </div>
                </div>
            <?php
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
                    <a href="mailto:contact@rcc.com" target="_blank"
                        class="footer-category-item hover-underline-animation">Email Us</a><br>
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
                    <?php include('visitorcounter.php') ?>
                </div>
            </div>
        </div>
        <div class="notice">
            <p>&copy; Copyright 2022, Camping Company</p>
        </div>
    </footer>
</body>

</html>