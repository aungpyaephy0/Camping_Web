<?php session_start();
include('googletranslate.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style2.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <title>Detail Page</title>
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

  <?php
  if (!isset($_SESSION)) {
    session_start();
  }
  $connect = mysqli_connect('localhost', 'root', '', 'assignment');

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
  }


  $campsite_sql = "SELECT * FROM campsite WHERE Site_ID='" . $id . "'";
  $pitches_sql = "SELECT * FROM pitches WHERE pitches.Site_ID ='" . $id . "'
   AND pitches.availability = 'Available'";

  $camp_result = mysqli_query($connect, $campsite_sql);
  $pitch_result = mysqli_query($connect, $pitches_sql);


  $no_of_row = mysqli_num_rows($camp_result);
  ?>
  <div class="banner">
    <img src="" alt="">
  </div>
  <?php
  for ($i = 0; $i < $no_of_row; $i++) {
    $row = mysqli_fetch_array($camp_result);
    $Site_ID = $row['Site_ID'];
    // echo "<div class='camp'>";
    // echo "<p> Location: " . $row['CampSite_Name'] . " </p><br>";
    // echo "<p>Region: " . $row['Short_Desc'] . "</p><br>";
    // echo "<p> Rating: " . $row['Rating'] . " </p><br>";
    // echo "</div>";
  }
  ?>

  <div class="Long-Description">
    <div class="Long-Description-Content">
      <div class="title">
        <?php echo "<h4> " . $row['CampSite_Name'] . " </h4>" ?>
      </div>
      <?php echo "<p> " . $row['Long_Desc'] . "</p>";
      echo "<p> Rating: " . $row['Rating'] . " </p>";
      echo "<p> Map: " . $row['Coordinates'] . " </p>";
      ?>
    </div>
  </div>
  <div class="Long-Description">
    <div class="Long-Description-Content">
      <div class="title"></div>
      <?php echo "<h2> Select A Pitch Type </h2>";

      echo " <label for='language'>Select a Pitch Type :</label>";
      echo " <select name='language' id='language'> ";
      ?>
    </div>
  </div>
  <?php

  $no_of_row = mysqli_num_rows($pitch_result);
  foreach ($pitch_result as $row) {

    echo "<option value = '" . $row['Pitches_Type'] . "'> " . $row['Pitches_Type'] . " </option>";
  }
  ?>
  </select>
  <section class="booking-side">
    <h3>Check Availability</h3>
    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0b13edf"
      data-id="0b13edf" data-element_type="column">
      <div class="elementor-widget-wrap elementor-element-populated">
        <div
          class="elementor-element elementor-element-9084648 elementor-widget elementor-widget-kamperen_core_accommodation_reservation_filter"
          data-id="9084648" data-element_type="widget"
          data-widget_type="kamperen_core_accommodation_reservation_filter.default">
          <div class="elementor-widget-container">
            <div
              class="qodef-shortcode qodef-m qodef-accommodation-reservation-filter qodef-layout--horizontal qodef--loaded">
              <input type="hidden" name="s" value="">
              <div class="qodef-m-field qodef--check-in">
                <label class="qodef-m-field-label">
                  <svg xmlns="http://www.w3.org/2000/svg" width="11.934" height="13.149" viewBox="0 0 11.934 13.149">
                    <g transform="translate(-4 -2.5)">
                      <path
                        d="M5.715,6h8.5a1.215,1.215,0,0,1,1.215,1.215v8.5a1.215,1.215,0,0,1-1.215,1.215h-8.5A1.215,1.215,0,0,1,4.5,15.719v-8.5A1.215,1.215,0,0,1,5.715,6Z"
                        transform="translate(0 -1.785)" fill="none" stroke="#446851" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="1"></path>
                      <path d="M24,3V5.43" transform="translate(-11.603)" fill="none" stroke="#446851"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                      <path d="M12,3V5.43" transform="translate(-4.463)" fill="none" stroke="#446851"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                      <path d="M4.5,15H15.434" transform="translate(0 -7.14)" fill="none" stroke="#446851"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                    </g>
                  </svg>
                  Check-in </label>
                <div class="qodef-m-field-input-wrapper">
                  <input type="text"
                    class="qodef-m-field-input qodef-datepick-calendar qodef--date qodef--check-in is-datepick"
                    name="check_in" value=""
                    data-reserved-dates="Apr 25, 2020|Apr 26, 2020|Apr 27, 2020|Apr 28, 2020|Apr 29, 2020|Apr 30, 2020|May 1, 2020|May 2, 2020|Jun 13, 2020|Jun 14, 2020|Jun 15, 2020|Jun 16, 2020|Jun 17, 2020|Jun 18, 2020|Jul 18, 2020|Jul 19, 2020|Jul 20, 2020|Jul 21, 2020|Aug 1, 2020|Aug 2, 2020|Aug 3, 2020|Aug 4, 2020|Aug 5, 2020|Aug 6, 2020|Aug 7, 2020|Aug 8, 2020|Sep 10, 2020|Sep 11, 2020|Sep 12, 2020|Sep 13, 2020|Sep 14, 2020|Sep 15, 2020|Oct 7, 2020|Oct 8, 2020|Oct 9, 2020|Oct 10, 2020|Oct 11, 2020|Oct 12, 2020|Oct 13, 2020|Oct 14, 2020|Oct 15, 2020|Nov 16, 2020|Nov 17, 2020|Nov 18, 2020|Nov 19, 2020|Dec 17, 2020|Dec 18, 2020|Dec 19, 2020|Dec 20, 2020|Dec 21, 2020|Jan 18, 2021|Jan 19, 2021|Jan 20, 2021|Jan 21, 2021|Jan 22, 2021|Feb 10, 2021|Feb 11, 2021|Feb 12, 2021|Feb 13, 2021|Feb 14, 2021|Feb 15, 2021|Feb 16, 2021|Mar 15, 2021|Mar 16, 2021|Mar 17, 2021|Mar 18, 2021|Mar 19, 2021|Mar 20, 2021|Mar 21, 2021|Apr 4, 2021|Apr 5, 2021|Apr 6, 2021|Apr 7, 2021|Apr 8, 2021|Apr 9, 2021|Apr 10, 2021|May 17, 2021|May 18, 2021|May 19, 2021|May 20, 2021|May 21, 2021|May 22, 2021|May 23, 2021|May 24, 2021|May 25, 2021|May 26, 2021|May 27, 2021|May 28, 2021|Jun 10, 2021|Jun 11, 2021|Jun 12, 2021|Jun 13, 2021|Jun 14, 2021|Jul 10, 2021|Jul 11, 2021|Jul 12, 2021|Jul 13, 2021|Jul 14, 2021|Jul 15, 2021|Aug 13, 2021|Aug 14, 2021|Aug 15, 2021|Aug 16, 2021|Aug 17, 2021|Aug 18, 2021|Aug 19, 2021|Sep 15, 2021|Sep 16, 2021|Sep 17, 2021|Sep 18, 2021|Sep 19, 2021|Sep 20, 2021|Oct 18, 2021|Oct 19, 2021|Oct 20, 2021|Oct 21, 2021|Oct 22, 2021|Oct 23, 2021|Nov 14, 2021|Nov 15, 2021|Nov 16, 2021|Nov 17, 2021|Dec 16, 2021|Dec 17, 2021|Dec 18, 2021|Dec 19, 2021"
                    required="" readonly="">
                </div>
              </div>
              <div class="qodef-m-field qodef--check-out">
                <label class="qodef-m-field-label">
                  <svg xmlns="http://www.w3.org/2000/svg" width="11.934" height="13.149" viewBox="0 0 11.934 13.149">
                    <g transform="translate(-4 -2.5)">
                      <path
                        d="M5.715,6h8.5a1.215,1.215,0,0,1,1.215,1.215v8.5a1.215,1.215,0,0,1-1.215,1.215h-8.5A1.215,1.215,0,0,1,4.5,15.719v-8.5A1.215,1.215,0,0,1,5.715,6Z"
                        transform="translate(0 -1.785)" fill="none" stroke="#446851" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="1"></path>
                      <path d="M24,3V5.43" transform="translate(-11.603)" fill="none" stroke="#446851"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                      <path d="M12,3V5.43" transform="translate(-4.463)" fill="none" stroke="#446851"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                      <path d="M4.5,15H15.434" transform="translate(0 -7.14)" fill="none" stroke="#446851"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                    </g>
                  </svg>
                  Check-out </label>
                <div class="qodef-m-field-input-wrapper">
                  <input type="text"
                    class="qodef-m-field-input qodef-datepick-calendar qodef--date qodef--check-out is-datepick"
                    name="check_out" value=""
                    data-reserved-dates="Apr 25, 2020|Apr 26, 2020|Apr 27, 2020|Apr 28, 2020|Apr 29, 2020|Apr 30, 2020|May 1, 2020|May 2, 2020|Jun 13, 2020|Jun 14, 2020|Jun 15, 2020|Jun 16, 2020|Jun 17, 2020|Jun 18, 2020|Jul 18, 2020|Jul 19, 2020|Jul 20, 2020|Jul 21, 2020|Aug 1, 2020|Aug 2, 2020|Aug 3, 2020|Aug 4, 2020|Aug 5, 2020|Aug 6, 2020|Aug 7, 2020|Aug 8, 2020|Sep 10, 2020|Sep 11, 2020|Sep 12, 2020|Sep 13, 2020|Sep 14, 2020|Sep 15, 2020|Oct 7, 2020|Oct 8, 2020|Oct 9, 2020|Oct 10, 2020|Oct 11, 2020|Oct 12, 2020|Oct 13, 2020|Oct 14, 2020|Oct 15, 2020|Nov 16, 2020|Nov 17, 2020|Nov 18, 2020|Nov 19, 2020|Dec 17, 2020|Dec 18, 2020|Dec 19, 2020|Dec 20, 2020|Dec 21, 2020|Jan 18, 2021|Jan 19, 2021|Jan 20, 2021|Jan 21, 2021|Jan 22, 2021|Feb 10, 2021|Feb 11, 2021|Feb 12, 2021|Feb 13, 2021|Feb 14, 2021|Feb 15, 2021|Feb 16, 2021|Mar 15, 2021|Mar 16, 2021|Mar 17, 2021|Mar 18, 2021|Mar 19, 2021|Mar 20, 2021|Mar 21, 2021|Apr 4, 2021|Apr 5, 2021|Apr 6, 2021|Apr 7, 2021|Apr 8, 2021|Apr 9, 2021|Apr 10, 2021|May 17, 2021|May 18, 2021|May 19, 2021|May 20, 2021|May 21, 2021|May 22, 2021|May 23, 2021|May 24, 2021|May 25, 2021|May 26, 2021|May 27, 2021|May 28, 2021|Jun 10, 2021|Jun 11, 2021|Jun 12, 2021|Jun 13, 2021|Jun 14, 2021|Jul 10, 2021|Jul 11, 2021|Jul 12, 2021|Jul 13, 2021|Jul 14, 2021|Jul 15, 2021|Aug 13, 2021|Aug 14, 2021|Aug 15, 2021|Aug 16, 2021|Aug 17, 2021|Aug 18, 2021|Aug 19, 2021|Sep 15, 2021|Sep 16, 2021|Sep 17, 2021|Sep 18, 2021|Sep 19, 2021|Sep 20, 2021|Oct 18, 2021|Oct 19, 2021|Oct 20, 2021|Oct 21, 2021|Oct 22, 2021|Oct 23, 2021|Nov 14, 2021|Nov 15, 2021|Nov 16, 2021|Nov 17, 2021|Dec 16, 2021|Dec 17, 2021|Dec 18, 2021|Dec 19, 2021"
                    required="" readonly="">
                </div>
              </div>
              <div class="qodef-m-field qodef--guests">
                <label class="qodef-m-field-label">
                  <svg xmlns="http://www.w3.org/2000/svg" width="10.014" height="11.14" viewBox="0 0 10.014 11.14">
                    <g transform="translate(-5.5 -4)">
                      <path d="M15.014,25.88V24.753A2.253,2.253,0,0,0,12.76,22.5H8.253A2.253,2.253,0,0,0,6,24.753V25.88"
                        transform="translate(0 -11.24)" fill="none" stroke="#446851" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="1"></path>
                      <path d="M16.507,6.753A2.253,2.253,0,1,1,14.253,4.5,2.253,2.253,0,0,1,16.507,6.753Z"
                        transform="translate(-3.747)" fill="none" stroke="#446851" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="1"></path>
                    </g>
                  </svg>
                  Guests: </label>
                <div class="qodef-m-field-input-wrapper">
                  <input type="text" class="qodef-m-field-input qodef--guests" name="guests" value="" readonly="">
                </div>
                <div class="qodef-m-field-persons">
                  <div class="qodef-m-field-person qodef-e qodef--adult">
                    <div class="qodef-e-label-text">Adults</div>
                    <select name="adult" class="qodef-e-input qodef--select2 select2-hidden-accessible"
                      data-singular-label="Adult" data-plural-label="Adults" data-select2-id="1" tabindex="-1"
                      aria-hidden="true">
                      <option value="1" selected="selected" data-select2-id="3">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                      data-select2-id="2" style="width: 44px;"><span class="selection"><span
                          class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                          aria-expanded="false" tabindex="0" aria-disabled="false"
                          aria-labelledby="select2-adult-3j-container"><span class="select2-selection__rendered"
                            id="select2-adult-3j-container" role="textbox" aria-readonly="true" title="1">1</span><span
                            class="select2-selection__arrow" role="presentation"><b
                              role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                        aria-hidden="true"></span></span>
                  </div>
                  <div class="qodef-m-field-person qodef-e qodef--children">
                    <div class="qodef-e-label">
                      <span class="qodef-e-label-text">Children</span>
                      <span class="qodef-e-label-description">2-12 years old</span>
                    </div>
                    <select name="children" class="qodef-e-input qodef--select2 select2-hidden-accessible"
                      data-singular-label="Children" data-plural-label="Children" data-select2-id="4" tabindex="-1"
                      aria-hidden="true">
                      <option value="0" selected="selected" data-select2-id="6">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                      data-select2-id="5" style="width: 44px;"><span class="selection"><span
                          class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                          aria-expanded="false" tabindex="0" aria-disabled="false"
                          aria-labelledby="select2-children-8u-container"><span class="select2-selection__rendered"
                            id="select2-children-8u-container" role="textbox" aria-readonly="true"
                            title="0">0</span><span class="select2-selection__arrow" role="presentation"><b
                              role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                        aria-hidden="true"></span></span>
                  </div>
                  <div class="qodef-m-field-person qodef-e qodef--infant">
                    <div class="qodef-e-label">
                      <span class="qodef-e-label-text">Infant's</span>
                      <span class="qodef-e-label-description">0-2 years old</span>
                    </div>
                    <select name="infant" class="qodef-e-input qodef--select2 select2-hidden-accessible"
                      data-singular-label="Infant" data-plural-label="Infant's" data-select2-id="7" tabindex="-1"
                      aria-hidden="true">
                      <option value="0" selected="selected" data-select2-id="9">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                      data-select2-id="8" style="width: 44px;"><span class="selection"><span
                          class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                          aria-expanded="false" tabindex="0" aria-disabled="false"
                          aria-labelledby="select2-infant-qj-container"><span class="select2-selection__rendered"
                            id="select2-infant-qj-container" role="textbox" aria-readonly="true" title="0">0</span><span
                            class="select2-selection__arrow" role="presentation"><b
                              role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                        aria-hidden="true"></span></span>
                  </div>
                  <div class="qodef-m-field-person qodef--button">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <br><br>

  <!-- For Facilities And Amenties Section -->
  <h2>Facilities & Amenties</h2>
  <?php
  $facilities = "SELECT facilities.*
  FROM campsite_facilities,facilities
   WHERE campsite_facilities.Facilities_ID= facilities.Facilities_ID 
   AND campsite_facilities.Site_ID = '" . $id . "'";
  $facilities_result = mysqli_query($connect, $facilities); ?>
  <div class="facilities-container">
    <?php
    foreach ($facilities_result as $row) {
      ?>
      <div>
        <?php
        echo "<img class='facilities-item' src='images/" . $row['Facilities_Icon'] . "'>";
        echo "<p> " . $row['Faclities_Name'] . " </p> <br>";

        ?>
      </div>

      <?php
    }
    ?>
  </div>
  <?php echo "<a href='Booking.php?Site_ID=$Site_ID'> Book Now </a>"; ?>
  <br><br>
  <h2>Campsite Rules</h2>
  <ol>
    <span>
      <li>Campsite is opened for vehicle and reception is opened always from 8:00 till 20:00. </li>
      <li>The earliest check in time is 08:00 and latest check out time is 11:30. </li>
      <li>All roads in the camp site must remain free. </li>
      <li>Emptying chemical toilets is allowed only on designated place </li>
      <li>Guests should keep their pitch area clear and tidy.</li>
      <li>Quiet hours are from 14:00 till 16:t00 afternoon and from 22:00 till 7:00</li>
      <li>Use of electric stoves, and heating is not allowed and can result in power shut down. </li>
      <li>Smoking inside caravan/rented tents/cabins is strictly forbidden </li>
    </span>
  </ol>
  <br><br>

  </div>

  <!-- For Local Attraction Section -->
  <h3>Local Attraction </h3>
  <?php
  $local_query = "SELECT campsite.CampSite_Name,localattractions.Place,Attraction_Photo
    FROM LocalAttractions, campsite
    WHERE campsite.Site_ID = localattractions.Site_ID
    AND campsite.Site_ID = '" . $id . "'";

  $local_result = mysqli_query($connect, $local_query);
  foreach ($local_result as $row) { ?>

    <section class="about" id="about">
      <div class="row">

        <div class="video-container">

          <?php echo "<img width='650px'height='450px' src='" . $row['Attraction_Photo'] . "'>"; ?>
        </div>
        <div class="content">
          <?php
          echo "<p>" . $row['Place'] . "</p>";
          ?>

        </div>
      </div>
    </section>

  <?php }
  ?>


  <!-- For Review Message -->
  <?php
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
  ?>
  <section id="form-details">
    <?php echo "<form class='contact-form-text'action='detail.php' method='post'>" ?>
    <h2>We Love to hear from you</h2>
    <textarea name="txtMessage" class="contact-form-text" cols="30" rows="10" placeholder="Your Message"></textarea>
    <input type="hidden" name="Site_ID" value="<?php echo $id; ?>">
    <input type="submit" name="submit" value="submit" />
    </form>
  </section>
  </div>

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