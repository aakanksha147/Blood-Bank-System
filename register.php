<?php
session_start();
if(isset($_SESSION['email'])){
    $status=$_SESSION['status'];
    if($status=='Receiver'){
    	header('location:availablebloodsamples.php');
    }
    else{
        header('location:dashboard.php');
	}
}
else{
	   header('location:index.php');
}

include( "connect.php" );

if(isset($_POST['hospital'])){
	$hospital_name = mysqli_real_escape_string($con,$_POST['hospital_name']);
	$holder_first_name = mysqli_real_escape_string($con,$_POST['holder_first_name']);
	$holder_last_name = mysqli_real_escape_string($con,$_POST['holder_last_name']);
	$state = mysqli_real_escape_string($con,$_POST['state']);
	$city = mysqli_real_escape_string($con,$_POST['city']);
	$password = md5($_POST['hospital_password']);
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$contact_no = mysqli_real_escape_string($con,$_POST['contact_no']);
	$status = "Hospital";

	$query = "INSERT INTO `hospital`(`HospitalName`, `HolderFirstName`, `HolderLastName`, `Password`, `HospitalEmail`, `HospitalContactNo`,`hospitalState`, `hospitalCity`) VALUES ('$hospital_name','$holder_first_name','$holder_last_name','$password','$email','$contact_no','$state','$city')";
	$exe = mysqli_query($con,$query) or die( mysqli_error($con) );

	$query1 = "INSERT INTO `login`(`email_id`, `password`, `status`) VALUES ('$email', '$password','$status')";
	$exe1 = mysqli_query($con,$query1) or die( mysqli_error($con) );

	header("Location:index.php");
}

else if(isset($_POST['patient'])){
	$userEmail = mysqli_real_escape_string($con,$_POST['email']);
	$patient_name = mysqli_real_escape_string($con,$_POST['patient_name']);
	$blood_group = mysqli_real_escape_string($con,$_POST['blood_group']);
	$patient_password = md5($_POST['patient_password']);
	$patient_contact_no = mysqli_real_escape_string($con,$_POST['patient_contact_no']);
	$status = "Receiver";
	
	$query = "INSERT INTO `receiverDetails`(`UserEmail`, `name`, `bloodGroup`, `password`, `contactNo`) VALUES ('$userEmail','$patient_name','$blood_group','$patient_password','$patient_contact_no')";
	$exe = mysqli_query($con,$query) or die( mysqli_error($con) );

	$query1 = "INSERT INTO `login`(`email_id`, `password`, `status`) VALUES ('$userEmail', '$patient_password','$status')";
	$exe1 = mysqli_query($con,$query1) or die( mysqli_error($con) );
	header("Location:index.php");
}

?>