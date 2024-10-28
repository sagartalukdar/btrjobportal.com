<?php
session_start(); 

if (isset($_POST['user-type'])) {
	$userType=$_POST['user-type'];
	$_SESSION['user-email']=$_POST['user-email']; 
	$_SESSION['user-password']=$_POST['user-password'];
	$_SESSION['user-type']=$_POST['user-type'];

	

	if ($userType=="ADMIN" || $userType=="COUNSELLOR") {
		$redirectPage = "session/admin-login.php";
	} else if ($userType=="COMPANY") {
		$redirectPage = "session/company-login.php";
	} else if ($userType=="APPLICANT") {
		$redirectPage = "session/applicant-login.php";
	} else {
		$_SESSION['errLogin'] = "User Role Could Not Match.";
		unset($_SESSION['user-email']);
		unset($_SESSION['user-password']);
		header('location:login.php');
		die();
	}
	header("location:$redirectPage");
} else {
	$_SESSION['errLogin'] = "You must select a role to login.";
	// unset($_SESSION['user-email']);
	// unset($_SESSION['user-password']);
	header('location:login.php');
}
?>