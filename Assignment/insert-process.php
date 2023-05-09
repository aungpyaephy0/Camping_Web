<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>

<body>
	<?php
	session_start();

	include("connect.php");

	if (isset($_SESSION['UserName'])) {
		$UserName = $_SESSION['UserName'];

		if ($UserName == 'Jihyo') {

			if (isset($_POST['submit'])) {
				$CampName = mysqli_real_escape_string($connect, $_POST['CampSite_Name']);
				$Region = mysqli_real_escape_string($connect, $_POST['Region']);
				$location = mysqli_real_escape_string($connect, $_POST['location']);
				$Site_Image = mysqli_real_escape_string($connect, $_POST['Site_Image']);
				$Short_Desc = mysqli_real_escape_string($connect, $_POST['Short_Desc']);
				$Long_Desc = mysqli_real_escape_string($connect, $_POST['Long_Desc']);
				$Coordinates = mysqli_real_escape_string($connect, $_POST['Coordinates']);
				$Rating = $_POST['Rating'];
				$Site_Email = mysqli_real_escape_string($connect, $_POST['Site_Email']);
				$Site_Phone = $_POST['Site_Phone'];




				$photo = $_FILES['Site_Image']['name'];

				echo "Site_Image Name" . $_FILES['Site_Image']['name'];


				$photo_path = "images/" . $Site_Image;

				echo "" . $photo_path . "<br>";

				$msg = copy($_FILES['Site_Image']['tmp_name'], $photo_path);


				$sql = "insert into campsite(CampSite_Name,Region, location, Site_Image,Short_Desc,Long_Desc,Coordinates,Rating,Site_Email,Site_Phone) 
				VALUES
				('$CampName','$Region','$location','$Site_Image','$Short_Desc','$Long_Desc','$Coordinates','$Rating','$Site_Email','$Site_Phone')";

				if (mysqli_query($connect, $sql)) {
					echo "<script>alert('Successfully saved!');</script>";
					echo "<script>window.location='display.php';</script>";
				} else
					echo "<script>alert('Insertion Error!');</script>";

			} else {
				echo "not submitted";
			}

		} else {
			echo "<script>alert('Administrator only!');</script>";
			echo "<script>window.location='login.php';</script>";
		}
	} else {
		echo "<script>alert('Please login at first!');</script>";
		echo "<script>window.location='login.php';</script>";
	}
	?>
</body>

</html>