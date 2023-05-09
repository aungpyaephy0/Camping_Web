<?php 
session_start(); ?>
 
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style2.css">
	<title>Insert</title>
</head>
<body>
	<h3>Insert</h3>
	<?php 
		if (isset($_SESSION['UserName'])) {
			$UserName= $_SESSION['UserName'];

			if ($UserName == 'Jihyo') {
				echo "Welcome back Admin";
			?>
	
			<form action="insert-process.php" method="POST" class="register-form" enctype="multipart/form-data">
				<input type="text"class="contact-form-text" name ="CampSite_Name" placeholder="Name"><br>
				<input type="text"class="contact-form-text" name ="Region" placeholder="Region"><br>
				<input type="text"class="contact-form-text" name ="location" placeholder="location"><br>
				<input type="text"class="contact-form-text" name ="Short_Desc" placeholder="Short Description"><br>
				<input type="text"class="contact-form-text" name ="Long_Desc" placeholder="Long Description"><br>
				<input type="text"class="contact-form-text" name ="Coordinates" placeholder="Coordinates"><br>
				<input type="text"class="contact-form-text" name ="Rating" placeholder="Rating"><br>
				<input type="text"class="contact-form-text" name ="Site_Email" placeholder="Email"><br>
				<input type="text"class="contact-form-text" name ="Site_Phone" placeholder="Phone"><br>
				<input type="file"class="contact-form-text" name ="Site_Image" placeholder="Photo"><br>

				

				<input type="submit" name="submit" value="Save">

			</form>

			<?php
		}
			else {
				echo "Only for Admin";
			}
			

		}
		else {
			echo "Only For Admin";
		}
	?>
	<form>
		
	</form>
</body>
</html>