<?php
session_start();
include('connect.php');

$email = mysqli_real_escape_string($con,$_POST['email']);
$password = md5($_POST['password']);
$array = array();

$sql = "SELECT `email_id`, `password`, `status` FROM `login` WHERE email_id='$email' AND password='$password'";
$result = mysqli_query($con ,$sql);
$count = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
$status = $row['status'];
if ($count == 1) {
  	$_SESSION['email']= $email;
  	$_SESSION['status'] = $status;
  	echo $_SESSION['status'];
}else{
	$msg="error";
  	echo $msg;
}
?>
