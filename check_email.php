<?php
session_start();

    include('connect.php');

    $email = mysqli_real_escape_string($con,$_POST['email']);
    $query = "SELECT `email_id` FROM `login` WHERE email_id = '$email'";
    $exe = mysqli_query($con,$query) or die( mysqli_error($con) );

    if( mysqli_num_rows($exe) > 0 ){
    $isAvailable = false;

    } else {
    $isAvailable = true;     
    }

    echo json_encode(array(
    'valid' => $isAvailable,
    ));

    
?>