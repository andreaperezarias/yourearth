<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "your");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


echo $name=$_POST['name'];

if(isset($_POST['submit']))
{	 
$name=$_POST['name'];
$age=$_POST['age'];
$sex=$_POST['sex'];
$adress=$_POST['address'];
$email=$_POST['email'];
$contact=$_POST['mobile'];
	 $sql = "INSERT INTO `subscribe` (`Name`, `Age`, `sex`, `adress`, `email`, `numbercontact`) VALUES ('$name', '$age', '$sex', '$adress', '$email', '$contact')";
	 if (mysqli_query($conn, $sql)) {
		echo ", thank you for your subscription!";
	 } else {
		echo "There was an error connecting " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

include('index.html');

?>