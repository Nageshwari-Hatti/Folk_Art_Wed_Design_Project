<?php

error_reporting(0);

echo "<body style='background-color: rgb(247, 210, 162);'> 
<div style='border: 2px solid black;'></div>
</body>";

echo "<h1 style='text-align:center; font-size: 40px; color: red;'>WEBSITE SURVEY FORM</h1>";

echo "<div style='border: 2px solid black;'></div>";

echo "</br>";
echo "</br>";

$firstname = $_POST['fname'];
$middlename = $_POST['mname'];
$lastname = $_POST['lname'];
$address_1 = $_POST['address'];
$email_1 = $_POST['email'];
$phone_1 = $_POST['phone'];


echo ("<table style='margin-left: 40%; font-size: 25px; color: rgb(210, 8, 250);'>"
			."<tr>"
				."<td>First Name</td>"
				."<td>:&emsp;$firstname</td>"
			."</tr>"
			."<tr>"
				."<td>Middle Name &emsp;</td>"
				."<td>:&emsp;$middlename</td>"
			."</tr>"
			."<tr>"
				."<td>Last Name</td>"
				."<td>:&emsp;$lastname</td>"
			."</tr>"
			."<tr>"
				."<td>Address</td>"
				."<td>:&emsp;$address_1</td>"
			."</tr>"
			."<tr>"
				."<td>Email</td>"
				."<td>:&emsp;$email_1 </td>"
			."</tr>"
			."<tr>"
				."<td>phone</td>"
				."<td>:&emsp;$phone_1</td>"
			."</tr>"
		."</table>");

echo "</br>";
echo "</br>";
echo "<div style='border: 2px solid black;'></div>";



$country_1 = $_POST['country'];
$bday_1 = $_POST['bday'];
$media_1 = $_POST['media'];
$inp_1 = $_POST['inp'];
$subject_1 = $_POST['subject'];
$photo_1 = $_POST['photo'];
$number_1 = $_POST['number'];
$like_1 = $_POST['like'];


echo "<p>Selected Country Name is : $country_1</p>";
echo "<p>Date Of Bitrh is : $bday_1</p>";
echo "<p>You have Discovered the Website through : $media_1</p> ";
echo "<p>Field of content/s You DO LIKE THE MOST : $inp_1</p>";
echo "<p>Your Review on our Website and its Content : $subject_1</p>";
echo "<p>Photo Uploaded by YOU : $photo_1</p>";
echo "<p>Your Rating for Our Website [Range ( 1 - 5 )] : $number_1</p>";
echo "<p>Would You Like to Revisit this WebPage : $like_1</p>";

echo "<style> 
p {
color: rgb(210, 8, 250);
text-align: center;
font-size: 30px;
margin-left: auto;
margin-right: auto;
}
</style>";

echo "<div style='border: 2px solid black;'></div>";

echo "<div style='font-size: 50px; text-align: center; font: bold; color: red;'>**********</div>";

?>