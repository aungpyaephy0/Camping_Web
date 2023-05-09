<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Information</title>

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
    <?php
    include("connect.php");
    if (isset($_SESSION['UserName'])) {
        $UserName = $_SESSION['UserName'];
        if ($UserName == 'Jihyo') {
            // code...
            echo "<script>window.location='insert.php';</script>";
        }


        $sql = "select * from campsite";

        $result = mysqli_query($connect, $sql);

        $no_of_row = mysqli_num_rows($result);

        ?>

        <div class="banner">

        </div>
        <div class="abt">
            <?php include('googletranslate.php'); ?>
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
        <div class="contact-section">
            <h2>Available Pitch Type </h2>
            <div class="border"></div>
        </div>
        <div class="ImageContainer">
            <div class="Tent-Container-1">
                <img src="images/tent.jpg" width="450px" height="400px" alt="">
                <div class="Tent-Desc">
                    <h3>Camping area for tents</h3>

                </div>
            </div>
            <div class="Tent-Container-1">
                <img src="images/swimming.jpg" width="450px" height="400px" alt="">

                <div class="Tent-Desc">
                    <h3>Swimming Pool & Camping </h3>

                </div>
            </div>
            <div class="Tent-Container-1">
                <img src="images/glimping.jpg" width="450px" height="400px" alt="">
                <div class="Tent-Desc">
                    <h3>Cabins and glamping</h3>

                </div>

            </div>
        </div>
        <div class="ending-line"></div>
        <section class="about" id="about">
            <div class="row">
                <div class="video-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2143.5418248823485!2d96.13448620210676!3d16.80864635622509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xad6c72f21500700d!2sKMD%20Online%20Test%20Center!5e0!3m2!1sen!2smm!4v1674589512172!5m2!1sen!2smm"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="content">
                    <h3>Location</h3>
                    <p>
                        No 331, Pyay Road (near Jasmine Place Hotle), Sanchaung Township,Yangon, Myanmar.
                    </p>
                    <a href="https://www.google.com/maps/place/KMD+Online+Test+Center/@16.8086464,96.1344862,17.83z/data=!4m18!1m12!4m11!1m3!2m2!1d96.122072!2d16.7992089!1m6!1m2!1s0x30c1eb17071def23:0x25f24831cb46ad51!2zUTRWRitSNlgsIOGAgOGAvOGAiuGAuuGAt-GAmeGAvOGAhOGAuuGAt-GAkOGAreGAr-GAhOGAuuGAgOGAmeGAuuGAuOGAlOGArOGAuOGAnOGAmeGAuuGAuCDhgIDhgLzhgIrhgLrhgLfhgJnhgLzhgIThgLrhgJDhgK3hgK_hgIThgLrhgJnhgLzhgK3hgK_hgLfhgJThgJrhgLosIFlhbmdvbg!2m2!1d96.1231396!2d16.7946186!3m4!1s0x0:0xad6c72f21500700d!8m2!3d16.8090494!4d96.1353648"
                        class="btn">
                        View On Google Maps</a>
                </div>
            </div>
            <div class="contact-section">
                <h2>Wearable Technology </h2>
                <div class="border"></div>
            </div>
            <div class="ImageContainer">
                <div class="Tent-Container-1">
                    <img src="images/Clock.jpg" width="450px" height="400px" alt="">
                    <div class="Tent-Desc">
                        <h3>Smartwatch</h3>
                        <p>The interchangeability of bracelets and wrist band and the possibility of changing the dial,
                            a smartwatch will both look great at the gym and during a dissertation.</p>
                    </div>
                </div>
                <div class="Tent-Container-1">
                    <img src="images/headphone2.jpg" width="450px" height="400px" alt="">

                    <div class="Tent-Desc">
                        <h3>Headphone</h3>
                        <p>A headphone is a device that allows a person to listen to audio from a variety of sources, such
                            as music, movies, and phone calls. </p>
                    </div>
                </div>
                <div class="Tent-Container-1">
                    <img src="images/blanket.jpg" width="450px" height="400px" alt="">
                    <div class="Tent-Desc">
                        <h3>Electric Blanket</h3>
                        <p>An electric blanket is a type of bedding that is powered by electricity to provide warmth. It
                            typically consists of a heating element, a temperature control system, and a blanket or quilt
                            made of insulated material. </p>
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
            if ($i % 2 == 0) { ?>
                <section class="about" id="about">
                    <div class="row">
                        <div class="video-container">
                            <?php echo "<img width='650px'height='450px' src='" . $row['Site_Image'] . "'><br>"; ?>
                            <!-- <img src="images/lanyon-holiday-park.jpg"  alt=""> -->
                            <!-- <h3>Lanyon Holiday Park</h3> -->
                        </div>
                        <div class="content">
                            <?php echo "<h3>" . $row['CampSite_Name'] . " </h3>";
                            echo "<p>" . $row['Short_Desc'] . "</p><br>";
                            echo "<p> Rating: " . $row['Rating'] . " </p><br>";
                            echo "<a href='detail.php?id=" . $Site_ID . "' class = 'btn'> Detail </a><br>";
                            ?>
                            <!-- <a href="#" class="btn">learn more</a> -->
                        </div>
                    </div>
                </section>
            <?php } else { ?>
                <section class="about" id="about">
                    <div class="row">
                        <div class="content">
                            <?php echo "<h3>" . $row['CampSite_Name'] . " </h3>";
                            echo "<p>" . $row['Short_Desc'] . "</p><br>";
                            echo "<p> Rating: " . $row['Rating'] . " </p><br>";
                            echo "<a href='detail.php?id=" . $Site_ID . "' class = 'btn2'> Detail </a><br>";
                            // echo "<a href='Booking.php?Site_ID=$Site_ID'> Book Now </a>";
                            ?>
                            <!-- <a href="#" class="btn">learn more</a> -->
                        </div>
                        <div class="row">
                            <div class="video-container">
                                <?php echo "<img width='650px'height='450px' src='" . $row['Site_Image'] . "'><br>"; ?>
                                <!-- <img src="images/lanyon-holiday-park.jpg"  alt=""> -->
                                <!-- <h3>Lanyon Holiday Park</h3> -->
                            </div>

                        </div>
                    </div>
                </section>
            <?php } ?>

            <?php
            // echo "<div class='camp'>";
            // echo "<img width='100px' height='100px' src='" . $row['Site_Image'] . "'><br>";
            // echo "<p> Location: " . $row['CampSite_Name'] . " </p><br>";
            // echo "<p>Region: " . $row['Short_Desc'] . "</p><br>";
            // echo "<p>Contat Us:  </p>";
            // echo "<p> Email: " . $row['Site_Email'] . " </p>";
            // echo "<p> Phone Number: " . $row['Site_Phone'] . " </p><br>";
            // echo "<p> Rating: " . $row['Rating'] . " </p><br>";
            // echo "<a href='detail.php?id=" . $Site_ID . "'> Go </a><br>";
            // echo "<a href='Booking.php?Site_ID=$Site_ID'> Book Now </a>";
            // echo "</div>";
    
        }
    } else {
        echo "Please login at first!";
    }

    ?>


    <div class="ending-line"></div>
    <div class="contact-section">
        <h2>Our Facilities and Services</h2>
        <div class="border"></div>
    </div>

    <div class="svg">
        <div class="svg-box-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="43.124" height="43.775" viewBox="0 0 43.124 43.775">
                <g id="parking" transform="translate(0 0.65)">
                    <g id="Group_105" data-name="Group 105" transform="translate(0 0)">
                        <path id="Path_212" data-name="Path 212"
                            d="M891.587,535.228h40.077a2.4,2.4,0,0,1,2.4,2.4h0a2.4,2.4,0,0,1-2.4,2.4H891.587"
                            transform="translate(-891.587 -535.228)" fill="none" stroke="#000"
                            stroke-miterlimit="22.926" stroke-width="1.3"></path>
                        <line id="Line_155" data-name="Line 155" y2="2.055" transform="translate(10.961 7.536)"
                            fill="none" stroke="#000" stroke-miterlimit="22.926" stroke-width="1.3"></line>
                        <line id="Line_156" data-name="Line 156" y2="2.055" transform="translate(31.513 7.536)"
                            fill="none" stroke="#000" stroke-miterlimit="22.926" stroke-width="1.3"></line>
                    </g>
                    <rect id="Rectangle_89" data-name="Rectangle 89" width="31.513" height="30.143" rx="3"
                        transform="translate(5.481 12.332)" fill="none" stroke="#000" stroke-miterlimit="22.926"
                        stroke-width="1.3"></rect>
                    <g id="Group_106" data-name="Group 106" transform="translate(15.071 17.812)">
                        <line id="Line_157" data-name="Line 157" y2="19.182" transform="translate(0)" fill="none"
                            stroke="#000" stroke-miterlimit="22.926" stroke-width="1.3"></line>
                        <path id="Path_213" data-name="Path 213"
                            d="M903.746,549.6h6.509a5.823,5.823,0,0,1,5.822,5.823h0a5.822,5.822,0,0,1-5.822,5.822h-6.509"
                            transform="translate(-903.746 -549.598)" fill="none" stroke="#000"
                            stroke-miterlimit="22.926" stroke-width="1.3"></path>
                    </g>
                </g>
            </svg>
            <p>Support Car Parking</p>
        </div>
        <div class="svg-box-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="45.3" height="45.3" viewBox="0 0 45.3 45.3">
                <g transform="translate(0.65 0.65)">
                    <g transform="translate(0 0)">
                        <line x1="3.703" transform="translate(40.075 27.574)" fill="none" stroke="#000"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3"></line>
                        <path
                            d="M2604.129,1538.516h9.226a1.42,1.42,0,0,0,1.42-1.42h0a7.1,7.1,0,0,0-7.1-7.1h-3.549a2.129,2.129,0,0,0-2.129,2.129v4.258A2.129,2.129,0,0,0,2604.129,1538.516Z"
                            transform="translate(-2582.839 -1519.355)" fill="none" stroke="#000" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="1.3"></path>
                        <path d="M2550.516,1471.42h0a1.419,1.419,0,0,0-1.419-1.42h-5.677a1.42,1.42,0,0,0-1.42,1.42h0"
                            transform="translate(-2533.484 -1470)" fill="none" stroke="#000" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="1.3"></path>
                        <circle cx="3.703" cy="3.703" r="3.703" transform="translate(15.078 23.87)" fill="none"
                            stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3"></circle>
                        <g transform="translate(3.968 9.983)">
                            <rect id="Rectangle_25" data-name="Rectangle 25" width="10.184" height="9.258" rx="4.629"
                                transform="translate(10.184 9.258) rotate(180)" fill="none" stroke="#000"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3"></rect>
                        </g>
                        <path
                            d="M2516.71,1517.419h17.032v-4.968A18.451,18.451,0,0,0,2515.291,1494h-19.871a1.419,1.419,0,0,0-1.419,1.419V1516a1.419,1.419,0,0,0,1.419,1.419h14.193"
                            transform="translate(-2494 -1489.742)" fill="none" stroke="#000" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="1.3"></path>
                    </g>
                    <g transform="translate(0 27.574)">
                        <g id="Group_32" data-name="Group 32" transform="translate(6.387 0)">
                            <line y1="9.258" transform="translate(2.21)" fill="none" stroke="#000"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3"></line>
                            <path d="M2530,1662l2.839,2.839,2.839-2.839" transform="translate(-2530 -1655.51)"
                                fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.3"></path>
                        </g>
                        <path d="M2497.549,1646H2494v12.774h44V1646" transform="translate(-2494 -1642.348)" fill="none"
                            stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3"></path>
                        <path d="M2525.355,1678v3.548H2514V1678" transform="translate(-2510.451 -1668.671)" fill="none"
                            stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3"></path>
                        <line x1="28.7" transform="translate(15.078 3.703)" fill="none" stroke="#000"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3"></line>
                    </g>
                </g>
            </svg>
            <p> Motorhome service </p>
        </div>
        <div class="svg-box-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="43.549" height="46.536" viewBox="0 0 43.549 46.536">
                <g id="shower_bath" data-name="shower/bath" transform="translate(0.65 0.65)">
                    <g id="Group_18" data-name="Group 18" transform="translate(0 0)">
                        <line id="Line_19" data-name="Line 19" x2="17.105" transform="translate(18.606 23.379)"
                            fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3">
                        </line>
                        <line id="Line_20" data-name="Line 20" x2="2.851" transform="translate(26.208 9.125)"
                            fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3">
                        </line>
                        <path id="Path_30" data-name="Path 30"
                            d="M2502,670h20.4a8.741,8.741,0,0,1,8.741,8.741V680.8a4.371,4.371,0,0,0,1.911,3.613l8.941,6.084a5.164,5.164,0,0,1,2.259,4.266v0a2.913,2.913,0,0,1-2.915,2.914h-27.679a2.913,2.913,0,0,1-2.915-2.914v0A5.165,5.165,0,0,1,2513,690.5l8.941-6.084a4.372,4.372,0,0,0,1.912-3.613v-1.33a3.643,3.643,0,0,0-3.643-3.642H2502"
                            transform="translate(-2502 -670)" fill="none" stroke="#000" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="1.3"></path>
                        <line id="Line_21" data-name="Line 21" x1="3.423" transform="translate(8.96 23.31)" fill="none"
                            stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3"></line>
                    </g>
                    <g id="Group_19" data-name="Group 19" transform="translate(14.805 31.932)">
                        <line id="Line_22" data-name="Line 22" y2="5.702" transform="translate(0 0.95)" fill="none"
                            stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3"></line>
                        <line id="Line_23" data-name="Line 23" y2="2.851" transform="translate(5.702 1.901)" fill="none"
                            stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3"></line>
                        <line id="Line_24" data-name="Line 24" y2="0.95" transform="translate(10.453 0.95)" fill="none"
                            stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3"></line>
                        <line id="Line_25" data-name="Line 25" y2="5.702" transform="translate(15.205 0)" fill="none"
                            stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3"></line>
                        <line id="Line_26" data-name="Line 26" y2="0.95" transform="translate(20.907 1.901)" fill="none"
                            stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3"></line>
                        <line id="Line_27" data-name="Line 27" y2="5.702" transform="translate(20.907 7.602)"
                            fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3">
                        </line>
                        <line id="Line_28" data-name="Line 28" y2="0.95" transform="translate(15.205 9.503)" fill="none"
                            stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3"></line>
                        <line id="Line_29" data-name="Line 29" y2="4.751" transform="translate(10.453 7.602)"
                            fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3">
                        </line>
                        <line id="Line_30" data-name="Line 30" y2="2.851" transform="translate(5.702 9.503)" fill="none"
                            stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3"></line>
                        <line id="Line_31" data-name="Line 31" y2="0.95" transform="translate(0 12.354)" fill="none"
                            stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3"></line>
                    </g>
                </g>
            </svg>
            <p>Sanitary facilities</p>
        </div>
    </div>

    <div class="svg">
        <div class="svg-box-1">
            <img src="images/laundry.svg" alt="">
            <p>Support Laundry Service</p>
        </div>
        <div class="svg-box-2">
            <img src="images/wifi.svg" alt="">
            <p>Get Internet Access</p>
        </div>
        <div class="svg-box-3">
            <img src="images/electrical.svg" alt="">
            <p> Electrical cabinets </p>
        </div>
    </div>
    <div class="ending-line"></div>


    <div class="Two-Side-Map">
        <div class="Side-Map">
            <h3>Compound Map</h3><br><br>
            <ul>
                <li>Reception, Info Centar</li>

                <li>First aid / Ambulance</li>
                <li>Sanitary facilities</li>
                <li>Car Parking</li>
                <li>Restaurant, Cafe</li>
                <li>Sitting area</li>
                <li>Fire place / BB</li>
                <li>Available tent site (up to 20 sites)</li>
                <li>Washing ans drying machines</li>
            </ul>
        </div>

        <div class="Side-Map-2">
            <img src="https://kamperen.qodeinteractive.com/wp-content/uploads/2021/07/map-new.jpg">
        </div>
    </div>
    <div class="ending-line"></div>



    <?php
    include("connect.php");
    if (isset($_POST['submit'])) {
        // code...
    
        $Region = mysqli_real_escape_string($connect, $_POST['Region']);

        $sql = "select * from campsite where Region LIKE '%$Region%'";

        $result = mysqli_query($connect, $sql);

        $no_of_row = mysqli_num_rows($result);


        if ($no_of_row == 0) {
            // code...
            echo "No Record Found!";
            echo "<br><br>";
        } else {

            echo "<br><br><br>";

            echo "<table border=1 cellpadding=5 width=50% class=tbl>";

            for ($i = 0; $i < $no_of_row; $i++) {
                // code...
                $row = mysqli_fetch_array($result);
                //$cid = $row['cid'];
                echo "<tr>";
                echo "<td>" . ($i + 1) . "</td>";
                echo "<td>" . $row['Region'] . "</td>";
                echo "<td><img width='100px' height='100px' src='" . $row['Site_Image'] . "'></td>";

            }

            echo "<table>";

            echo "<br><br>";

        }
        echo "<button><a href='search.php'>Back</a></button>";


        mysqli_close($connect);

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