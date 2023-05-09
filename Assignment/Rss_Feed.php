<?php
include('connect.php');

$sql = "SELECT * FROM rss_feed ORDER BY Feed_ID DESC "; 

$query = mysqli_query($connect,$sql);

header("Content-type: text/xml"); 

echo "<?xml version='1.0' encoding='UTF-8'?>
<rss version='2.0'>
<channel>
<title>Global Wild Swimming and Camping Site</title>
<link>http://localhost/PHP%20testing/Assignment/login.html</link>

<description>Swimming and Camping Information Blog</description>
<language>en-us</language>"; 

while($row = mysqli_fetch_array($query))
{
	$title=$row['Title']; 
	$link=$row['Link']; 
	$description=$row['Description']; 

echo "<item>
		<title>$title</title>
		<link>$link</link>
		<description>$description</description>
	</item>"; 
} 
echo "</channel></rss>"; 
?>