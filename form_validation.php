<?php
if (strlen($_POST[name])<4) {
	echo 'Name too short';
	exit();
}
if (!filter_var($_POST[email], FILTER_VALIDATE_EMAIL)) {
	echo 'Please enter a valid email';
	exit();
}
if (strlen($_POST[message])<4) {
	echo 'Your message is too short! please give me meaningful message';
	exit();
}

$con=mysqli_connect("some_provider", "some_username", "some_password");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$sql="INSERT INTO database_name (name, email, message)
VALUES
('$_POST[name]','$_POST[email]','$_POST[message]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "You got it!!";

mysqli_close($con);


?>