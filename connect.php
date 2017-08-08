<?php

$con = mysqli_connect("localhost","root","","bloodBank");

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQLI: " . mysqli_connect_error();
}

?>