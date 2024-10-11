<?php 

$conn = mysqli_connect('localhost','root','','shop');

$name = $_POST['username'];

$email = $_POST['email'];

$password = $_POST['pword'];


$query = mysqli_query($conn "INSERT INTO  shops ('Name','Email','PASSWORD') values('$name','$email','$password')");

if ($query) {
	// code...
echo "<script>alert('Thank you for this joining, your Regestration has saved✅')</script>";
}

else{

	echo "<script>alert('Something went wrong❌')</script>";
}












 ?>