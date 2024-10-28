<?php
session_start(); 

if (isset($_POST['user-type'])) {
	$userType=$_POST['user-type'];
	$_SESSION['user-email']=$_POST['user-email'];
	$_SESSION['user-password']=$_POST['user-password'];

	if ($userType=="ADMIN" || $userType=="COUNSELLOR") {
		$redirectPage = "../session/admin-login";
	} else if ($userType=="COMPANY") {
		$redirectPage = "../session/company-login";
	} else if ($userType=="APPLICANT") {
		$redirectPage = "../session/applicant-login";
	} else {
		$_SESSION['errLogin'] = "User Role Could Not Match.";
		unset($_SESSION['user-email']);
		unset($_SESSION['user-password']);
		header('location:login');
		die();
	}
	header("location:$redirectPage");
} else {
	$_SESSION['errLogin'] = "You must select a role to login.";
	unset($_SESSION['user-email']);
	unset($_SESSION['user-password']);
	header('location:login');
}
?>