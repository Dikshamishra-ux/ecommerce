<?php 

$con = mysqli_connect('localhost','root','','shop');

$name = $_POST ['name'];
$email = $_POST ['email'];
$phone = $_POST ['phone_no'];
$password = $_POST ['pass'];
$interested = $_POST ['drop-down'];
$messages   = $_POST ['message'];


$query = mysqli_query($con,"INSERT INTO `online`( `Name`, `Email`, `Phone`, `Password`, `Interested`, `Messages`) VALUES('$name', '$email', '$phone', '$password','$interested','$messages')");

	if ($query) {
		// code...
		echo "<script>alert(' successfully Submit ✅')</script>"; 
        header('location: index.php');
   }else{
      echo "<script>alert(' Something went wrong ❌')</script>";

	}

?>