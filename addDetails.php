<?php 

 	session_start();
 	if(!isset($_SESSION['email'])){
  		header('location:index.php');
	}
 	$email=$_SESSION['email'];
	include('connect.php');
	$name = mysqli_real_escape_string($con,$_POST['name']);
	$age = mysqli_real_escape_string($con,$_POST['age']);
	$bloodGroup = mysqli_real_escape_string($con,$_POST['blood_group']);
	$contact_no = mysqli_real_escape_string($con,$_POST['contact_no']);
	echo $name;
	echo $age;
	echo $bloodGroup;
	echo $contact_no;

	$query = "INSERT INTO `bloodSampleDetails` (`EmailId`,`name`, `age`, `bloodGroup`, `contactNo`) VALUES ('$email','$name','$age','$bloodGroup','$contact_no')";
	$exe = mysqli_query($con,$query) or die( mysqli_error($con));
		
	header("Location:dashboard.php");
?>