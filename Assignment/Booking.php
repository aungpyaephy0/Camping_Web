<?php
session_start();

	include("connect.php");
if (isset($_SESSION['UserName'])) {
    $UserName = $_SESSION['UserName'];
    if ($UserName == 'Jihyo') {
        // code...
        echo "<script>window.location='insert.php';</script>";
    }
    echo "<b>Valid User:</b> " . $UserName . "<br>";

    $Site_ID = $_GET['Site_ID'];
    $sql = "INSERT INTO booking_info (UserName,Site_ID) VALUES ('".$UserName."',".$Site_ID.")";


    if (mysqli_query($connect,$sql)) {
        echo "<script>alert('Succesfully Saved');</script>";
        echo "<script>window.location='display.php';</script>";
    }
    else {
        echo "Booking Fail!!";
    }
}else {
    echo "Please Log in First!!";
}

?>
 