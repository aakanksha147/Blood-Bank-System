<?php 
session_start();

	if(!isset($_SESSION['email'])){
		$user="0";
		echo $user;
		exit();
	}
	else if($_SESSION['status']=='Hospital'){
		$user="1";
		echo $user;
		exit();
	}
	$useremail=$_SESSION['email'];

	include('connect.php');

	$id=mysqli_real_escape_string($con,$_POST['id']);
	if($useremail=='' || $useremail==NULL){
		header('location:index2.php');
	}
	$query1="SELECT `EmailId`,  `bloodGroup` FROM `bloodSampleDetails` WHERE id='$id'";
	$result1 = mysqli_query($con ,$query1) or die(mysqli_error($con));
	$row = mysqli_fetch_array($result1);
	$hospitalEmail=$row['EmailId'];
	$bloodGroup = $row['bloodGroup'];

	$query2="SELECT `UserEmail`, `name` FROM `receiverDetails` WHERE UserEmail='$useremail'";
	$result2 = mysqli_query($con ,$query2) or die(mysqli_error($con));
	$row1 = mysqli_fetch_array($result2);
	$name=$row1['name'];

	$query="INSERT INTO `requested_user`(`UserEmail`, `UserName`, `BloodGroup`,`hospitalEmail`) VALUES ('$useremail', '$name', '$bloodGroup','$hospitalEmail')";
	$result = mysqli_query($con,$query) or die(mysqli_error($con));

?>
