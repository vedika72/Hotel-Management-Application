<?php
// include('connection.php');
function reg_in()
{
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mob = $_POST['mobile'];
	$check_in = $_POST['in'];
	$hall = $_POST['room'];
	$hall_type = $_POST['type'];
	$details = "Name-".$name." Email-".$email." Mobile-".$mob." Date-".$check_in." Hall-".$hall." Hall Type-".$hall_type;
	$var_str = var_export($details, true);
	$var = "<?php\n\n\$text = $var_str;\n\n?>";
	file_put_contents('uploads/halldetails.php', $var);
	// if(mysql_query("INSERT INTO `book` (`name`,`email`,`mobile_no`,`check_in`,`check_out`,`room`,`room_type`) VALUES ('$name','$email','$mob','$check_in','$check_out','$rm','$room_type')"))
	// {
	// 	header('Location: C:/wamp/www/project/payment.html');
	// }
	// else
	// 	echo mysql_error();

	echo file_get_contents("bookhall.html");
	}
}
if(isset($_POST['submit']))
{
	reg_in();
	//echo ' succesfully inserted';
}
else
	echo 'Not book';
?>