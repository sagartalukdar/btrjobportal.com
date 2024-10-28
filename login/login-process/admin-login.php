<?php 
session_start();
if (isset($_SESSION['user-email']) && isset($_SESSION['user-password'])) {
	$email = $_SESSION['user-email'];
	$password = $_SESSION['user-password'];
	echo "Email fetched : ".$email;
	echo "<br>Password fetched : ".$password;

}
?>